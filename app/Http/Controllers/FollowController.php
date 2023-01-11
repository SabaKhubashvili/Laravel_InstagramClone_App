<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FollowController extends Controller
{
    public function follow(Request $request){
        $following = Auth::user();

        $followable = User::find($request);

        // $following->following()->detach($followable);

        $following->following()->attach($followable);

        return Redirect::back();
    }
    public function unfollow(Request $request){
        $unfollow = Follow::where('follower_id',Auth::user()->id)->where('user_id',$request->unfollow);

        $unfollow->delete();

        return Redirect::back();
    }
}
