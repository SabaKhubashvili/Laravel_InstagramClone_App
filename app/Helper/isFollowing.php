<?php

use App\Models\Follow;
use Illuminate\Support\Facades\Auth;


function isFollowing($id){
    if(Follow::where('user_id',$id)->where('follower_id',Auth::user()->id)->exists()){
        return 'following';
    }else{
        return 'none';
    };
}