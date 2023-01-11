<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Heart extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class,'hearts','post_id','user_id');
    }
}
