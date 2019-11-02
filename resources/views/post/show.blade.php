<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Show Post!</title>
    </head>
    <body>
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <a href="{{route('post.edit', $post)}}"></a>
    </body>
</html>
