<?php

namespace App\DataTables;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AttributeDataTable extends DataTable
{

    protected string|array $exportColumns = [
        'id',
        'name',
        'comment',
        'required',
        'data_type_id',
        'attribute_list_id',
        'unit_id'
    ];


    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                $edit_route = route('attribute.edit',$row->id);
                $delete_route = route('attribute.destroy',$row->id);
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
            ->addColumn('data_type_id', function ($attribute) {
                if ($attribute->datatype)
                    return "<a href='".route('datatype.edit',$attribute->datatype)."'>".
                        $attribute->datatype->name."</a>";
                else
                    return "";
            })
            ->addColumn('attribute_list_id', function ($attribute) {
                if ($attribute->attributeList)
                    return "<a href='".route('attributelist.edit',$attribute->attributeList)."'>".
                        $attribute->attributeList->name."</a>";
                else
                    return "";
            })
            ->addColumn('unit_id', function ($attribute) {
                if ($attribute->unit)
                    return "<a href='".route('unit.edit',$attribute->unit)."'>".
                        $attribute->unit->name."</a>";
                else
                    return "";
            })
            ->addColumn('required', function ($attribute) {
                if ($attribute->required == 0)
                    return "<div class='text-info'>Optional</div>";
                else
                    return "<div class='text-warning'>Required</div>";
            })
            ->rawColumns(['action','data_type_id','attribute_list_id','unit_id','required']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Attribute $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('attribute-table')
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
                                                    window.location = '".route('attribute.create')."';
                                                }",
                            'className' => 'ml-2',
                        ]),
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('comment')->style('width: 200px'),
            Column::make('required'),
            Column::make([
                'data' => 'data_type_id',
                'title' => 'Data type',
                'searchable' => false,
                'sortable' => false,
            ]),
            Column::make([
                'data' => 'attribute_list_id',
                'title' => 'Attribute list',
                'searchable' => false,
                'sortable' => false,
            ]),
            Column::make([
                'data' => 'unit_id',
                'title' => 'Unit',
                'searchable' => false,
                'sortable' => false,
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
        return 'Attribute_' . date('YmdHis');
    }
}
