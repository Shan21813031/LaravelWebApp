<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class homecontroller extends Controller
{
    public function search(Request $request){
        // $search = $request['search'] ?? " ";
        // if($search != ""){
        //     $posts = Post::where('title', "=", $search)->get();

        // }else{
        //     $post=Post::all();
        // }
        // $data = compact('posts', 'data');

        // return view('home', ['posts'=>$posts]);
        // return redirect(route('home'))

        // if(isset($_GET['query'])){
        //     echo 'get text';
        // }else{
        //     return view('home');
        // }
    }
}
