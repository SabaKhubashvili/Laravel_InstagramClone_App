<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Heart;
use App\Models\Follow;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getProfileimageAttribute($value){
        return 'images/user/' . $value;
    }
    public function posts(){
        return $this->hasMany(Post::class,'user_id');
    }
    public function following() {
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'user_id');
    }
    
    public function followers() {
        return $this->belongsToMany(User::class, 'follows','user_id', 'follower_id');
    }
    public function hearts(){
        return $this->hasMany(Heart::class,'user_id');
    }
    
}
