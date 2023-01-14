<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Heart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HeartController extends Controller
{
    public function heart(Request $request){

        $heart = Post::Find($request->heart)->hearts()->attach(Auth::user());


      

        return Redirect::back();
            
    }
    public function unheart(Request $request){
        $unheart = Heart::where('post_id',$request->unheart)->where('user_id',Auth::user()->id);

        $unheart->delete();

        return Redirect::back();
    }
}
