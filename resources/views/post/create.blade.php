<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        <form method="POST" action="{{route('post.store')}}">
            <label>
                Title
                <input type="text" name="title" value="{{old('title')}}" placeholder="Enter a post title...">
            </label>
            <label for="content">
                content
                <textarea name="content" value="{{old('content')}}" placeholder="Enter the content for this blog post..."></textarea>
            </label>
            <input type="submit" name="Create post">
        </form>
    </body>
</html>
