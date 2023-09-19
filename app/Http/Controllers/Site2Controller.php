<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
   function index()
   {
      return view('site2.index');
   }
   function about()
   {
      return view('site2.about');
   }
   function post_msg(Request $request)
   {
      // dd($request); // die and dum
      $name = $request->name;
      $email = $request->email;
      $msg = $request->msg;
      // return redirect()->route('view');
      return view('site2.request', compact('msg', 'name', 'email'));

   }
   function view()
   {
      return view('site2.request');
   }
}
