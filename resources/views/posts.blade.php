<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <h1>Posts</h1>
    <hr>
    <br/>
    <table class="table">
      @foreach($posts as $post)
      <div style="border-radius: 10px; border: 2px solid #cccccc; padding: 20px; width: auto; height: auto;">
        <h3>{{ $post->title }}</h3>
        <br/>
        @foreach($users as $user)
          @if($post->author == $user->id)
        <p>Author: {{$user->first_name}} {{$user->last_name}} <br/> {{$post->date}}</p>
          @endif
        @endforeach
        <br/>
        <p>{{ $post->content }}</p>
      </div>
      <br/>
      @endforeach

    </table>

  </body>
</html>
