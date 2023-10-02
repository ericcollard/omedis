<?php

namespace App\DataTables;

use App\Models\AttributeListValue;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AttributeListValueDataTable extends DataTable
{

    protected string|array $exportColumns = [
        'id',
        'name',
        'comment',
        'attribute_list_id'
    ];


    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($attributelistvalue) {

                $edit_route = route('attributelistvalue.edit', [$attributelistvalue, $this->attributelist]);
                $delete_route = route('attributelistvalue.destroy',[$attributelistvalue,$this->attributelist]);

                $x = '
                    <button type="submit" class="btn btn-warning btn-sm">
                        <a href="'.$edit_route.'" style="color: inherit">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>
                    </button>
                    <form class="d-sm-inline-block" action="'.$delete_route.'" method="POST">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-danger btn-sm ml-2"
                        onclick="return confirm(\'Are You Sure Want to Delete?\')">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                        </button>
                    </form>
                ';
                return $x;
            })
            ->addColumn('attribute_list_id', function ($attributelistvalue) {
                if ($attributelistvalue->attributeList)
                    return "<a href='".route('attributelist.edit',$attributelistvalue->attributeList)."'>".
                        $attributelistvalue->attributeList->name."</a>";
                else
                    return "";
            })
            ->addColumn('comment', function ($attributelistvalue) {
                if ($attributelistvalue->comment)
                {
                    $pos = strpos($attributelistvalue->comment, '#');
                    if ($pos > 0)
                    {
                        $hex = substr ($attributelistvalue->comment, $pos+1, 6) ;
                        if ( ctype_xdigit($hex)) {
                            $outStr ="";
                            $outStr.= "<svg width='20' height='20'>";
                            $outStr.= " <rect width='20' height='20' style='fill:#".$hex."'/>";
                            $outStr.= "</svg>";
                            return $outStr." ".$attributelistvalue->comment;
                        }
                        else
                            return $attributelistvalue->comment;
                    }
                    else
                        return $attributelistvalue->comment;
                }
                else
                    return "";
            })
            ->rawColumns(['action','attribute_list_id','comment']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(AttributeListValue $model): QueryBuilder
    {
        $builder =  $model->newQuery();
        if ($this->attributelist)
        {
            $builder->where('attribute_list_id',$this->attributelist->id);
        }
        return $builder;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        $builder = $this->builder()
                    ->setTableId('attributelistvalue-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0,'asc')
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('reset'),
                        Button::make('reload'),

                        Button::make( [
                            'text' =>'Create value',
                            'action' => "function (e, dt, button, config) {
                                                            window.location = '".route('attributelistvalue.create',[$this->attributelist])."';
                                                        }",
                            'className' => 'ml-2',
                        ]),
                    ]);

        return $builder;
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('comment'),
            Column::make([
                'data' => 'attribute_list_id',
                'title' => 'Attribute list',
            ]),
            Column::make([
                'data' => 'action',
                'title' => '...',
                'searchable' => false,
                'sortable' => false,
            ]),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'AttributeListValue_' . date('YmdHis');
    }
}
