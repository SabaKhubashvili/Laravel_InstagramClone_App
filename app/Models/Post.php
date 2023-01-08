<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getImagepathAttribute($value){
        return 'images/postImages/'. $value;
    }
    // public function likes(){
    //     return $this->hasMany('App\Models\Like','post_id');
    // }
}
