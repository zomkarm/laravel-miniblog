<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }

    public function create(Request $request){
        $user = $request->user();
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $user->post()->save($post);

        return redirect(route('post_index'))->with('status','Post Added Successfully !!');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('editpost',['post'=>$post]);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect(route('dashboard'))->with('status','Post Edited Successfully !!');
    }

    public function delete($id){
        Post::destroy($id);
        return redirect(route('dashboard'))->with('status','Post Deleted Successfully !!');
    }
}
