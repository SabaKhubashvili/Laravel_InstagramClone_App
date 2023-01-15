<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')
                       ->get();

        $profile = Auth::user();
       
        $users = User::where('id', '!=', \Auth::user()->id)
                       ->orderBy('created_at','desc')
                       ->take(8)
                       ->get();
         $follow =  Follow::all();
        //  foreach($follow->where('user_id',9)->all() as $follow){
        //     return $follow->following;
        //  }
        //  return $follow->where('user_id',9)->all()->following;


        return view('index',compact(['posts','profile','users','follow']));
     }

}
