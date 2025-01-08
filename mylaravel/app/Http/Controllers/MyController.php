<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function multiply(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        return view('lab.multipication', compact('num1', 'num2'));
    }

    private function myprivite(){
        return 1;
    }

    function myfunction(Request $req, $varl = "") {
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $varl;
        return view('myview.myfunction', $data);
    }
}
