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
}
