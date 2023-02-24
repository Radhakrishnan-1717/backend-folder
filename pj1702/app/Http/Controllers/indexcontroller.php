<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class indexcontroller extends Controller
{
    public function index($id)
    {
        $array=[
            1=>['name'=>'radhakrishnan','age'=>'22','place'=>'kallakurichi','number'=>'9791297877'],
            2=>['name'=>'vijay','age'=>'22','place'=>'bangalore','number'=>'9876543210']
        ];
// dd($array);

        return view('display',['users'=>$array,$id]);
    }

    
}
