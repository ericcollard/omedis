<?php

namespace App\Http\Controllers;

use App\DataTables\AttributeListValueDataTable;
use App\Models\AttributeList;
use Illuminate\Http\Request;
use App\DataTables\AttributeListDataTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use PDOException;
use Illuminate\Support\Facades\URL;


class AttributeListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AttributeListDataTable $dataTable)
    {
        return $dataTable->render('attributelist.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('udpate-data');
        $action = URL::route('attributelist.store');
        $method = 'POST';

        $attributelist = new attributeList();
        return view('attributelist.edit', compact('action','attributelist', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('udpate-data');
        $this->validate(request(), [
                'name' =>  'required',
            ]
        );

        try {

            $data = $request->all();
            $attributelist = AttributeList::create($data);
            // logique
            $attributelist->applyLogic();
            $attributelist->save();

        } catch (\Exception $e) {
            // catch exception when trying to insert invalid reply (spam or missing data)
            abort(403, "Impossible to create new data");
        }

        return redirect(route('attributelist.index'))->with( ['message' => 'Data created', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeListValueDataTable $dataTable,AttributeList $attributelist)
    {

        if ($attributelist)
            $dataTable->with('attributelist', $attributelist);

        return $dataTable->render('attributelistvalue.index',compact('attributelist'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeList $attributelist)
    {
        Gate::authorize('udpate-data');

        $action = URL::route('attributelist.update',['attributelist' => $attributelist]);
        $method = 'PATCH';

        return view('attributelist.edit', compact('action', 'method','attributelist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttributeList $attributeList)
    {
        Gate::authorize('udpate-data');
        $request->validate([
            'name' => 'required',
        ]);

        $attributeList->name = $request->name;
        $attributeList->comment = $request->comment;
        // logique
        $attributeList->applyLogic();
        $attributeList->save();

        return redirect()->route('attributelist.index')
            ->with(['alert' => 'success', 'message' => 'Data updated' ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeList $attributeList)
    {
        Gate::authorize('udpate-data');
        try{
            $attributeList->delete();
        } catch(PDOException $e)
        {
            return redirect(route('attributelist.index'))->with( ['message' => 'Data used - impossible to remove', 'alert' => 'danger']);

        }
        $attributeList->delete();
        return redirect(route('attributelist.index'))->with( ['message' => 'Data removed', 'alert' => 'success']);
    }

    public function brands()
    {
        $row = 1;
        $brands = [];
        if (($handle = fopen('../storage/app/public/marques.csv','r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $brands[] = $data[0];
            }
            fclose($handle);
        }
        foreach  ($brands as $brand) {
            echo "<p>".$brand.' // '.Str::of($brand)->slug('-').'</p>';


            DB::table('attribute_list_values')->insert(
                array('name' => Str::of($brand)->slug('-'),
                    'comment' => $brand,
                    'attribute_list_id' => 3,
                    'user_id' => 1)
            );


        }
    }

    public function categories()
    {
        $row = 1;
        $categories = [];
        if (($handle = fopen('../storage/app/public/categories.csv','r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $categories[] = $data[0];
            }
            fclose($handle);
        }
        foreach  ($categories as $category) {
            echo "<p>".$category.' // '.Str::of($category)->slug('-').'</p>';


            DB::table('attribute_list_values')->insert(
                array('name' => Str::of($category)->slug('-'),
                    'comment' => Str::of($category)->slug(' '),
                    'attribute_list_id' => 2,
                    'user_id' => 1)
            );


        }
    }

    public function colors()
    {

        $row = 1;
        $colors = [];
        if (($handle = fopen('../storage/app/public/colornames1.csv','r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($data[0] != 'name') {
                    $colors[] = [ 'name' => $data[0],
                        'hex' => $data[1], ];
                }


            }
            fclose($handle);

            usort($colors, [$this, 'cmp']);

            foreach  ($colors as $color) {
                echo "<p>".$color['name'].'-'.$color['hex'].'-'.$this->calcualteHue($color['hex'])['hue'].'</p>';
                echo "<svg width='20' height='20'>";
                echo " <rect width='20' height='20' style='fill:".$color['hex']."'/>";
                echo "</svg>";


                DB::table('attribute_list_values')->insert(
                    array('name' => Str::of($color['name'])->slug('-'),
                        'comment' => $color['name']." ".$color['hex'],
                        'attribute_list_id' => 1,
                        'user_id' => 1)
                );

            }
        }
    }

    function cmp($a, $b)
    {
        $hsv1 = $this->calcualteHue($a['hex']);
        $hsv2 = $this->calcualteHue($b['hex']);

        return ($hsv1['hue'] + $hsv1['saturation'] + $hsv1['value']) <=> ($hsv2['hue'] + $hsv2['saturation'] + $hsv2['value']);
        /*
        if ($ha > $hb)
            return 1;
        elseif ($ha < $hb)
            return -1;
        else
            return 0;*/
    }


    function calcualteHue($hex) {

        $hex      = str_replace('#', '', $hex);
        $length   = strlen($hex);
        $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
        $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
        $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));

        $red = $rgb['r'] / 255;
        $green = $rgb['g'] / 255;
        $blue = $rgb['b'] / 255;

        $min = min($red, $green, $blue);
        $max = max($red, $green, $blue);

        switch ($max) {
            case 0:
                // If the max value is 0.
                $hue = 0;
                $saturation = 0;
                $value = 0;
                break;
            case $min:
                // If the maximum and minimum values are the same.
                $hue = 0;
                $saturation = 0;
                $value = round($max, 4);
                break;
            default:
                $delta = $max - $min;
                if ($red == $max) {
                    $hue = 0 + ($green - $blue) / $delta;
                } elseif ($green == $max) {
                    $hue = 2 + ($blue - $red) / $delta;
                } else {
                    $hue = 4 + ($red - $green) / $delta;
                }
                $hue *= 60;
                if ($hue < 0) {
                    $hue += 360;
                }
                $saturation = $delta / $max;
                $value = round($max, 4);
        }


        return ['hue' => $hue, 'saturation' => $saturation, 'value' => $value];
    }


}
