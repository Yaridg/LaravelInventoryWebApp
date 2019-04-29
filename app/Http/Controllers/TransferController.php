<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransferController extends Controller
{
    public function index(Request $request)
    {
        return view('backEnd.transfer.index');
    }

    public function store(Request $request)
    {

        return 123;
    }
}
