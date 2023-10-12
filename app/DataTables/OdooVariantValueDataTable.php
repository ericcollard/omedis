<?php

namespace App\DataTables;

use App\Models\OdooVariantValue;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OdooVariantValueDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($odoovariantvalue) {
                $edit_route = route('odoovariantvalue.edit',$odoovariantvalue->id);
                $duplic_route = route('odoovariantvalue.duplicate',$odoovariantvalue->id);
                $delete_route = route('odoovariantvalue.destroy',$odoovariantvalue->id);
                $x = '
                    <button type="submit" class="btn btn-warning btn-sm">
                        <a href="'.$edit_route.'" style="color: inherit">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>
                    </button>
                    <button type="submit" class="btn btn-warning btn-sm">
                        <a href="'.$duplic_route.'" style="color: inherit">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                                Duplicate
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
            ->editColumn('id', function ($odoovariantvalue) {
                return "<a href='".route('odoovariantvalue.show',$odoovariantvalue)."'>".$odoovariantvalue->id."</a>";
            })
            ->setRowId('id')
            ->rawColumns(['id','action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(OdooVariantValue $model): QueryBuilder
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
                                                    window.location = '".route('odoovariantvalue.create')."';
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
        return 'OdooVariantValue_' . date('YmdHis');
    }
}
