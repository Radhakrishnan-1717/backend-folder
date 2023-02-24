<?php

namespace App\Http\Controllers;

use App\Userbasicdata;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function add(Request $request)
    {

        $data = $request->validate(
            [
                'username'=>'required|min:2|max:10',
                'usermailid'=>'required|min:5|max:20',
                'userphonenumber'=>'required|digits_between:9,11'
            ]
        );
        // dd($data);

        $user=new Userbasicdata();
        $user->create($data);
        

        // return ('data was added');

        $user2=Userbasicdata::all();

        // dd($user2);

        return view('datas',['collection'=>$user2]);
    }
}