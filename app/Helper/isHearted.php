<?php

use App\Models\Heart;
use Illuminate\Support\Facades\Auth;

 function isHearted($id){

    if(Heart::where('post_id',$id)
                        ->where('user_id',Auth::user()->id)
                        ->exists())
                        {
            return 'hearted';
        }
    else{
        return 'notReacted';
    }

}