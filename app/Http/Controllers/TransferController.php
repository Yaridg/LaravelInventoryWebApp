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
            $branches[] = $branch->district;
        }
        return view('backEnd.transfer.index',['branches' => $branches]);
    }

    public function store(Request $request)
    {
        $qrCode = $request->input('qrCode');
        $amount = $request->input('amount');
        $districtID = $request->transfer;
    }
}
