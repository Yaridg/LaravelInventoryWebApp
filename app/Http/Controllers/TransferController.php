<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransferController extends Controller
{
    public function index()
    {
        return view('backEnd.transfer.index');
    }

    public function store(Request $request)
    {
        //insert the amount to a branch
        
        return 123;
    }
}
