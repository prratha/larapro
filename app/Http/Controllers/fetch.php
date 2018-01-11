<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enq;

class fetch extends Controller
{
    //fetch data form db
    public function index()
    {
        $records = Enq::all();
        return view(

    }

}
