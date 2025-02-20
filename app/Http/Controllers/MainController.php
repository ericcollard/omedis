<?php

namespace App\Http\Controllers;

use App\Imports\ImportHelpers;
use App\Imports\ProductsImport;
use App\Imports\ProductsXmlImport;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Variant;
use App\Models\VariantAttribute;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class MainController extends Controller
{
    public function test() {
        $request = request();
        $request->session()->flash('flash.banner', 'Yay it works!');
        $request->session()->flash('flash.bannerStyle', 'success');

        $bread= [
            ['title' => 'Home', 'url' => '/'],
            ['title' => 'Attributes', 'url' => '/test'],
            ['title' => 'name', 'url' => ''],
        ];

        return view('test',compact('bread'));
    }

    public function home() {
        return view('documentation');
    }

    public function containers() {
        return view('containers');
    }

    public function glossary() {
        return view('glossary');
    }



    public function my_test() {

        /*
        $errors = '<p><i class="fa-solid fa-triangle-exclamation text-red-500 text-xl"></i> blabla</p>';
        $errors .= '<p><i class="fa-solid fa-circle-check text-green-400 text-xl"></i> blabla</p>';

        $pictures = DB::table('variant_attributes')
            ->select('value_txt')
            ->join('variants','variant_attributes.variant_id','=','variants.id')
            ->join('attributes','variant_attributes.attribute_id','=','attributes.id')
            ->where('variants.product_id','=',132)
            ->where('attributes.name','=','pictures')
            ->distinct()->get();
        $cnt = count($pictures);
        var_dump($cnt);

        return view('done',compact('errors'));
        */

        ImportHelpers::checkMandatoryCombinedAttributes();

        return view('my_test');

    }

    public function import_init() {
        ImportHelpers::initialize_table();
        return view('done');
    }

    public function import_csv() {
        ImportHelpers::bulkImport('sample.csv', 'public');
        return view('done');
    }
    public function import_xml() {
        ImportHelpers::bulkImport('sample.xml', 'public');
        return view('done');
    }
    public function import_xls() {
        ImportHelpers::bulkImport('test.xlsx', 'public');
        return view('done');
    }

    public function product_odoo_data($product_id) {
        $product = Product::findOrFail($product_id);
        return view('product-odoo-data',compact('product'));
    }

    public function product_data($product_id) {
        $product = Product::findOrFail($product_id);
        return view('product-data',compact('product'));
    }


    function readCSVFromURL($url, $delimiter = ',', $enclosure = '"', $escape = "\\")
    {
        try {
            // Vérifier si l'URL est valide
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                throw new Exception("URL non valide");
            }

            // Initialiser le tableau qui contiendra les données
            $csvData = [];

            // Ouvrir le flux depuis l'URL
            $handle = fopen($url, 'r');
            if ($handle === false) {
                throw new Exception("Impossible d'ouvrir le fichier");
            }

            // Lire les en-têtes (première ligne)
            $headers = fgetcsv($handle, 0, $delimiter, $enclosure, $escape);
            if ($headers === false) {
                throw new Exception("Impossible de lire les en-têtes du CSV");
            }

            // Lire le reste du fichier ligne par ligne
            while (($row = fgetcsv($handle, 0, $delimiter, $enclosure, $escape)) !== false) {
                // Créer un tableau associatif avec les en-têtes comme clés
                $rowData = array_combine($headers, array_pad($row, count($headers), null));
                $csvData[] = $rowData;
            }

            // Fermer le flux
            fclose($handle);

            return $csvData;
        } catch (Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    function searchBySKU($csvData, $searchSKU) {
        // Vérifier si on a une erreur dans les données CSV
        if (isset($csvData['error'])) {
            return ['error' => $csvData['error']];
        }

        // Vérifier si le SKU n'est pas vide
        if (empty($searchSKU)) {
            return ['error' => 'Le SKU de recherche ne peut pas être vide'];
        }

        // Nettoyer le SKU recherché (supprimer les espaces avant/après)
        $searchSKU = trim($searchSKU);

        // Rechercher la ligne correspondante
        $result = array_filter($csvData, function($row) use ($searchSKU) {
            return isset($row['sku']) && trim($row['sku']) === $searchSKU;
        });

        // Si on trouve un résultat, retourner la première correspondance
        if (!empty($result)) {
            return ['success' => true, 'data' => reset($result)];
        }

        // Si aucun résultat n'est trouvé
        return ['success' => false, 'message' => 'Aucun produit trouvé avec ce SKU'];
    }

    public function extract_picture_links()
    {

        try
        {
            $url = "https://afs-foiling.fr/wp-content/uploads/woo-feed/custom/csv/omedis.csv";
            $csvData = $this->readCSVFromURL($url);
            if(!isset($csvData['error']))
            {
                $csvData = array_filter($csvData, function($row) {
                    return !empty($row['sku']);
                });

                $variants = Variant::all();
                $pictureAttribute = Attribute::where('name', 'pictures')->first();
                foreach($variants as $variant)
                {
                    $ean = $variant->getVariantAttributeValue('ean');

                    $resultat = $this->searchBySKU($csvData, $ean);

                    if (isset($resultat['error'])) {
                        echo "Erreur : " . $resultat['error'];
                    } elseif ($resultat['success']) {
                        //var_dump($ean, $resultat['data']['image_link']);

                        $data = $pictureAttribute->getVariantAttributeValueData($resultat['data']['image_link'],$variant->id);
                        var_dump($data);
                        $variantAttribute = VariantAttribute::create($data);



                    }

                }
            }
            return view('picture-extract',compact('csvData'));
        } catch
        (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }

    }


    public function doc_gs_retailer() {
        return view('doc_gs_retailer');
    }

    public function doc_gs_supplier() {
        return view('doc_gs_supplier');
    }

}
