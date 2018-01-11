<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enq;
use App\Http\Requests;


class Insert extends Controller
{

    //


    public function store(Request $request)
    {
        $user = new Enq();
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->number = $request->input('number');
        $user->save();
        echo "<script>alert('You have successfully registered!');</script>";
        return view('contact');


    }
}
