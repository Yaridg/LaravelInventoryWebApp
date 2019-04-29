<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class ReportController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::select('select * from student_details');
        return view('backEnd.report.index');
    }
}