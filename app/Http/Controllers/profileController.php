<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Auth::user();

        return view('profile',compact(['profile']));
    }

    public function store(Request $request)
    {
        //
    }
    
    public function edit($id)
    {
        $profile = Auth::user();
        $profile2 = User::findOrFail($id);
        if($profile == $profile2){
            return view('edit_profile',compact(['profile']));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = User::findOrFail($id);

        if(Auth::user()->id != $profile->id){
            return redirect()->intended('/');
        };

        if($request->remove_image == 'Remove Image'){

            $profile->profile_image = 'default-user.png';

            $profile->save();

            return redirect()->to('/profile/' .$id. '/edit' ); 

        }
        if($path = $request->file('image')){

            
            $name =  $path->GetClientOriginalName();

            $path->move('images/user',$name);
            
            $profile->profile_image = $name;

            $profile->save();        
            return redirect()->to('profile/'.$id.'/edit');

        }else{

        $profile->name = $request->name;
        $profile->username = $request->username;
        $profile->bio = $request->bio;
        $profile->email = $request->email;


        $profile->save();

        return redirect()->intended('profile'); 
        }
    }

     
    public function show($id)
    {
        $profile = User::findOrFail($id);


        return view('profile',compact(['profile']));
    }

    
    public function destroy($id)
    {
        //
    }
}
