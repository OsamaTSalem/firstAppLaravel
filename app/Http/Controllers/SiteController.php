<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    function index()
    {
        $data = [1, 2, 3, 4, 5];
        $age = 21;
        // return view('site1.index')->with('data', $data)->with('age', $age); // The First Way To Transfer Data For view Using with
        return view('site1.index', compact('data', 'age')); // The Second Way (The Most Used And Easiest) To Transfer Data For view Using with
        /*return view('site1.index', [
            'data' => $data,
            'age' => $age
        ]);*/ // The Third Way To Transfer Data For view Using with
    }
    function about()
    {
        return view('site1.about');
    }

    function services()
    {
        return view('site1.services');
    }

    function contact()
    {
        return view('site1.contact');
    }

}

