<?php

namespace SimpleBlog\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use SimpleBlog\Http\Requests;

class Posts extends Controller{

    public function showAllPosts(){
      $posts = DB::table('posts')->get();
      $users = DB::table('users')->get();

      return view('posts', ['posts'=>$posts, 'users'=>$users]);
    }
}
