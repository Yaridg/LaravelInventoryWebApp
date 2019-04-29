<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class RemoveFromStockController extends Controller
{
    public function index()
    {
        //selecting branches from database and passing it to the view
        $data = DB::select('select * from lumberyardbranch');

        $branches= [];
        foreach ($data as $branch) {
            $branches[] = $branch->district;
        }

        return view('backLayout.removeFromStock',['branches' => $branches]);
    }

    public function remove(Request $request)
    {

    }
}