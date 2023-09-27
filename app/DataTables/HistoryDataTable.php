<?php

namespace App\DataTables;

use App\Models\History;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class HistoryDataTable extends DataTable
{
    protected string|array $exportColumns = [
        'id',
        'model',
        'action',
        'user_id',
        'old_values',
        'new_values',

    ];



    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('user_id', function ($history) {
                    return "<a href='".route('user.show',$history->user)."'>".$history->user->name."</a>";
            })
            ->setRowId('id')
            ->rawColumns(['user_id']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(History $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('history-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0,'desc')
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('model'),
            Column::make('action'),
            Column::make('user_id'),
            Column::make('old_values'),
            Column::make('new_values'),
            Column::make('created_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'History_' . date('YmdHis');
    }
}
