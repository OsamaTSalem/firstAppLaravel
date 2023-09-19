<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Form1Controller extends Controller
{
    function index(){
        return view('form1.index');
    }
    function form1Submit(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email',
            'age' => 'required',
            'password' => 'required'
            // 'city' => 'required',
        ]);

        // DB::statement('INSERT INTO (A, B, G) VALUES (?, ?, ?) ..ect'); // The First Way
        // DB::insert('courses', []);
        // 
        
        /*
        Category::create([
            'name' => $request->name
        ]);
        */

        User::create([
            'name' => $request->name,
            'age'  => $request->age,
            'email' => $request->email,
            'password'=> Hash::make($request->password)
        ]);

        return redirect()->back();
    }

    function form2image(){
        return view('form2Image.index');
    }

    function form2Submit(Request $request){ 
        // dd($request->all());
        
        // كود رفع صورة

        // $name = time() . rand() . $request->file('image')->getClientOriginalName();
        
        /* $ex = 'form2_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads'), $ex);
        */   
    

        // كود رفع اكتر من صورة

        // foreach ($request->file('album') as $i){
        //     $ex = 'form2_' . time() . '_' . rand() . '.' . $i->getClientOriginalExtension();
        //     $i->move(public_path('uploads'), $ex);
        // }
    }


}
