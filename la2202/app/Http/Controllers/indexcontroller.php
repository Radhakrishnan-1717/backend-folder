<?php

namespace App\Http\Controllers;

use App\Userbasics;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
   public function add(Request $request){
        
    $data=$request->validate(
        [
            'username'=>'required|min:3|max:20',
            'useremailid'=>'required|min:5|max:50',
            'userphonenumber'=>'required|digits_between:10,11'
        ]
        );

        $user=new Userbasics();
        $user->create($data);
        //   dd($user);
        //   $request->session()->flash('success','data was added');
// ->with('success','');
        // return 'added data';
        $user=Userbasics::all();

        return view('display1',['collection'=>$user]);

   }

public function editform($id){
    $user=Userbasics::find($id);
    // dd($id);
     return view('editform',['collection'=>$user]);
    
}

public function updateform(Request $request , $id){

    
    $data=$request->validate(
        [
            'username'=>'required|min:3|max:20',
            'useremailid'=>'required|min:5|max:50',
            'userphonenumber'=>'required|digits_between:10,11'
        ]
        );
       


        // $user=new Userbasics();
        $user=Userbasics::find($id);


        $user->fill($data);
        $user->save();
   

        $user=Userbasics::all();

        return view('display1',['collection'=>$user]);


}

public function deleteform($id){


Userbasics::destroy($id);

    $user=Userbasics::all();

    return view('display1',['collection'=>$user]);

    
      

}






}
