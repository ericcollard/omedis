<?php

namespace App\DataTables;

use App\Models\OdooModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OdooModelDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($odoomodel) {
                $edit_route = route('odoomodel.edit',$odoomodel->id);
                $duplic_route = route('odoomodel.duplicate',$odoomodel->id);
                $delete_route = route('odoomodel.destroy',$odoomodel->id);
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
            ->editColumn('id', function ($odoomodel) {
                return "<a href='".route('odoomodel.show',$odoomodel)."'>".$odoomodel->id."</a>";
            })
            ->setRowId('id')
            ->rawColumns(['id','action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(OdooModel $model): QueryBuilder
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
                                                    window.location = '".route('odoomodel.create')."';
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
            Column::make('comment'),
            Column::make('model'),
            Column::make('mode'),
            Column::make('field'),
            Column::make('mandatory'),
            Column::make('type'),
            Column::make('search_field'),
            Column::make('dest_model'),

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
        return 'OdooModel_' . date('YmdHis');
    }
}
