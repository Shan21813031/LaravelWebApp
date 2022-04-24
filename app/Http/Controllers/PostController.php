<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $post = new Post;
        
        $post->title = $request->title;
        $post->hyperlink = $request->hyperlink;
        if($request->hasFile('postImage')){

            $file = $request->file('postImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/posts/', $filename);
            $post->postImage = $filename;
        }
        $post->categories = $request->categories;
        $user->post()->save($post);

        return redirect(route('post_index'))->with('status', 'Advert created!');



        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('editpost', ['post'=>$post]);
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
        $post = Post::find($id);
        $post->title = $request->title;
        $post->hyperlink = $request->hyperlink;
        if($request->hasFile('postImage')){

            $file = $request->file('postImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/posts/', $filename);
            $post->postImage = $filename;
        }
        $post->categories = $request->categories;
        $post->save();

        return redirect(route('dashboard'))->with('status', 'Advert updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('dashboard'))->with('status', 'Advert deleted!');
    }
}
