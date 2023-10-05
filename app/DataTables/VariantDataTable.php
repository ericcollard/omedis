<?php

namespace App\DataTables;

use App\Models\Variant;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class VariantDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $dataTable = new EloquentDataTable($query);
        $dataTable->setRowId('id');
        $dataTable->editColumn('user_id', function ($variant) {
        return "<a href='".route('user.show',$variant->user)."'>".$variant->user->name."</a>";
            });
        $dataTable->editColumn('created_at', function ($variant) {
        if ($variant->created_at)
            return $variant->created_at->formatLocalized('%d %B %Y'); //'%d %B %Y %H:%M'  %c
        else
            return 'Aucune';
         });
        $dataTable->addColumn('attributes', function ($variant) {
            $html = "";
            $html .= "<ul>";

            foreach ($variant->variantAttributes as $variantAttribute)
            {
                $html .= "<li>";
                $html .= "<strong>";
                $html .= $variantAttribute->attribute->name;
                $html .= ": </strong>";

                switch ($variantAttribute->attribute->datatype->name)
                {
                    case "selection":
                        $html .= $variantAttribute->attribute->attributeList->attributeListValues->where('id', $variantAttribute->value_int)->first()->name;
                        break;
                    case "string":
                        $html .= $variantAttribute->value_str;
                        break;
                    case "integer":
                        $html .= $variantAttribute->value_int;
                        break;
                    case "float":
                        $html .= $variantAttribute->value_float;
                        break;
                    case "boolean":
                        $html .= $variantAttribute->value_int;
                        break;
                    case "money":
                        $html .= $variantAttribute->value_float;
                        break;
                    case "text":
                        $html .= $variantAttribute->value_txt;
                        break;
                }
                if ($variantAttribute->attribute->datatype->name != 'selection' and $variantAttribute->attribute->unit and $variantAttribute->attribute->unit->name != 'none')
                    $html .= $variantAttribute->attribute->unit->name;

                 $html .= "</li>";
            }
            $html .= "</ul>";
            return $html;
        });

        $dataTable->rawColumns(['attributes','user_id']);

        return $dataTable;
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Variant $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('variant-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0,'asc')
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('csv'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('attributes'),
            Column::make('user_id'),
            Column::make('created_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Variant_' . date('YmdHis');
    }
}
