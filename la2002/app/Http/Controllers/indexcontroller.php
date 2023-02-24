<?php

namespace App\Http\Controllers;

use App\Userbasics;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
     public function index(){
        $random=new Userbasics();
        $random['username']='rocky';
        $random['useremailid']='radhakrishnan.shanmugam.detrans.io';
        $random['phonenumber']=9791297877;


        
         // update 

        $random=Userbasics::find(5);   
        $random['username']='radha';
        $random['phonenumber']=9787476899; 
      //   $random->delete();
      //   $random->retrieved()

        $random->save();


      //   dd($random);


      //   return('data was added');

      return view('/app',['users'=>$random]);
     }
}
