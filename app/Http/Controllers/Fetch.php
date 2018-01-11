<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enq;
use Illuminate\Support\Facades\DB;

class Fetch extends Controller
{
    //fetch data form db
    public function index()
    {


        $records = DB::table('user')->get();

        return view('registered', ['records' => $records]);

    }

}
