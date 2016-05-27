<?php

namespace SimpleBlog;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{

  public $timestamps = false;

  public $table = 'posts';

  public $fillable = [
      'title', 'content', 'date', 'author',
  ];

}
