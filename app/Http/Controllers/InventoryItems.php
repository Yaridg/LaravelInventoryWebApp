<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
