<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

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


        return redirect()->intended('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
