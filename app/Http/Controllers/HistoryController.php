<?php

namespace App\Http\Controllers;

use App\DataTables\HistoryDataTable;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(HistoryDataTable $dataTable)
    {
        return $dataTable->render('history.index');
    }
}
