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


      

            
    }
    public function unheart(Request $request){

        $unheart = Heart::wherePostId($request->unheart)->whereUserId(Auth::user()->id);


        $unheart->delete();

    }
}
