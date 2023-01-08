<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $posts = Post::orderBy('id','desc')->get();
        $profile = Auth::user();

        return view('index',compact(['posts','profile']));
     }


    // public function heart(Post $post){
    //     $like = Like::where('post_id',$post->id);
    //     return $like;
    //     $like->save();
    // }
}
