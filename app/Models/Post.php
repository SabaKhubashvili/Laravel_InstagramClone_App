<?php

namespace App\Models;

use App\Models\User;
use App\Models\Heart;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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

    public function hearts(){
        return $this->belongsToMany(User::class,'hearts','post_id','user_id');
    }
}
