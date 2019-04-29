<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransferController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::select('select * from lumberyardbranch');

        $branches= [];
        foreach ($data as $branch) {
            $branches[] = array('id' => $branch->id,'name'=>$branch->district);
        }

        return view('backEnd.transfer.index',$branches);
    }

    public function store(Request $request)
    {

        return 123;
    }
}
