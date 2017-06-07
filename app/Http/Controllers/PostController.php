<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
    	$data = Post::select()->get()->toArray();
    	return view('index',['data'=>$data]);
    }

    public function list(){
    	$data = Post::select()->paginate(1);
    	return view('list',['data'=>$data]);
    }

    public function create(){
    	return view('add');
    }

    public function add(Request $request){
    	$post = new Post;
    	$post->name = $request->txtName;
    	$post->video = $request->txtVideo;
    	$post->link = $request->txtLink;
    	$post->email = $request->txtEmail;
    	$post->content = $request->txtContent;
    	$post->created_at = new \DateTime();
    	$post->save();
    	return redirect()->route('list');
    }

    public function edit($id){
    	$post = Post::find($id);
    	return view('edit',['post'=>$post]);
    }

    public function update(Request $request, $id){
    	$post = Post::find($id);
    	$post->name = $request->txtName;
    	$post->video = $request->txtVideo;
    	$post->link = $request->txtLink;
    	$post->email = $request->txtEmail;
    	$post->content = $request->txtContent;
    	$post->created_at = new \DateTime();
    	$post->save();
    	return redirect()->route('list');
    }

    public function delete($id){
    	$post = Post::find($id);
    	$post->delete();
    	return redirect()->route('list');
    }

    public function detail($id){
    	$post = Post::find($id);
    	return view('detail',['post'=>$post]);
    }

}
