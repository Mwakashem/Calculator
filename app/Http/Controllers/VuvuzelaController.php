<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuvuzelaController extends Controller
{
    // // getting and validating the data
    public function vuvuzela(Request $request)
    {


        // A function to add two user input
        // getting and validating the data
        $data = $request->validate([
            'a'=>'required',
            'b'=>'required',
            "operation"=>'required',
        ]);
        // // adding the two user variable
        extract($data);
        if ($operation == "+") {
            $result =$a+$b;
            // dd($result);
            
          return view('result', compact('result'));
          } else if($operation == "-"){
            $result =$a-$b;
            
          return view('result', compact('result'));
          } else if($operation == "*"){
            $result =$a*$b;
            
          return view('result', compact('result'));
          } elseif($operation == "/"){
            $result =$a/$b;
            
          return view('result', compact('result'));
          }
        
    }
}
