<?php

namespace App\DataTables;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
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
                $duplic_route = route('attribute.duplicate',$row->id);
                $delete_route = route('attribute.destroy',$row->id);
                $x = '
                    <button type="submit" class="btn btn-warning btn-sm">
                        <a href="'.$edit_route.'" style="color: inherit">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                    </button>
                    <button type="submit" class="btn btn-warning btn-sm">
                        <a href="'.$duplic_route.'" style="color: inherit">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                            </a>
                    </button>
                    <form class="d-sm-inline-block" action="'.$delete_route.'" method="POST">
                    '.csrf_field().'
                    '.method_field("DELETE").'
                    <button type="submit" class="btn btn-danger btn-sm ml-2"
                        onclick="return confirm(\'Are You Sure Want to Delete?\')">
                        <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                ';
                return $x;
            })
            ->addColumn('order', function ($row) {
                $x = '
                <a href = "'.route('attribute.first',$row->id).'"><i class="fa fa-backward-step" aria-hidden="true"></i></a>
                    <a href = "'.route('attribute.up',$row->id).'"><i class="fa fa-backward" aria-hidden="true"></i></a>
                     <a href = "'.route('attribute.down',$row->id).'"><i class="fa fa-forward" aria-hidden="true"></i></a>
                    <a href = "'.route('attribute.last',$row->id).'"><i class="fa fa-forward-step" aria-hidden="true"></i></a>
                ';
                return $x;
            })
            ->addColumn('data_type_id', function ($attribute) {
                if ($attribute->datatype)
                    return "<a href='".route('datatype.show',$attribute->dataType)."'>".
                        $attribute->datatype->name."</a>";
                else
                    return "";
            })
            ->addColumn('attribute_list_id', function ($attribute) {
                if ($attribute->attributeList)
                    return "<a href='".route('attributelist.show',$attribute->attributeList)."'>".
                        $attribute->attributeList->name."</a>";
                else
                    return "";
            })
            ->addColumn('unit_id', function ($attribute) {
                if ($attribute->unit)
                    return "<a href='".route('unit.show',$attribute->unit)."'>".
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
            ->addColumn('name', function ($attribute) {
                if ($attribute->name)
                    return "<a href='".route('attribute.show',$attribute)."'>".
                        $attribute->name."</a>";
                else
                    return "";
            })
            ->editColumn('comment', function ($attribute) {
                if (strlen($attribute->comment) < 20)
                    return $attribute->comment;
                else
                    return substr(strip_tags($attribute->comment),0,20)."<a href = ".route('attribute.show',$attribute)."> .....</a>";
            })
            ->rawColumns(['action','order','data_type_id','attribute_list_id','unit_id','required','name','comment']);    }

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
        $columns1 = [
            Column::make('order_column')->title('Id'),
            Column::make('order')->title('..')->sortable(false),
            Column::make('name'),
            ];
        if (Auth::check() and Auth::user()->hasRole('ROLE_ADMIN'))
            $columns1[] = Column::make('odoo_name');

        $columns2 = [
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
        return array_merge($columns1,$columns2);
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Attribute_' . date('YmdHis');
    }
}
