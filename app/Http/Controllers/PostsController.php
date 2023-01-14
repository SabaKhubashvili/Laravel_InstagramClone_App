<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{

   
    public function __construct(){
        return $this->middleware(['auth']);
    }
    
    public function store(Request $request)
    {

        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $path = $request->image;

        $image_name = $path->getClientOriginalName();

        $path->move('images/postImages/',$image_name);
        
        $post->image_path = $image_name;

        $post->save();


        return Redirect::back();

    }
}
