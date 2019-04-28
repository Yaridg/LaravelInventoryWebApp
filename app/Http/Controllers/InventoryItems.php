<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryItems extends Controller
{

    public function add(/*Request $request*/){

        //$roles = Role::get()->pluck('name', 'id');
        //return View('backEnd.users.create',compact('roles'));
        $data = array(
            'title' => 'Add Stock'

            );

        return view('backEnd.inventory.add')->with($data);
    }

    public function remove(/*Request $request*/){

        $data = array(
            'title' => 'Remove Stock'

            );

        return view('backEnd.inventory.remove')->with($data);
    }

    public function search(/*Request $request*/){

        $data = array(
            'title' => 'Search Inventory'

            );

        return view('backEnd.inventory.search')->with($data);
    }

    public function getCategory(Request $request){
        //return response("test request");

        if ($request->has('categoryid')) {
            $categoryID = $request->input('categoryid');

            // Get Data from database. This should be in a model
            $result = DB::select('select * from lumbertype where id = :id', ['id' => $categoryID]);

            return response($result);
            //return ;
        }

        //return $request->input('categoryid');

        /*$data = array(
            'title' => 'Search Inventory'

            );*/

        //return view('backEnd.inventory.search')->with($data);
    }
}
