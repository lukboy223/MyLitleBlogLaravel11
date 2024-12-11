<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <main>
        <section class="w-full pl-60 pr-60 mt-20">
            <div>
                <h2>{{ $user->name }}</h2>
            </div>
            <div class="m-10">
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->content }}</p>
            </div>
            <div class="w-full bg-black h-1 my-10"></div>
            <div>
                @auth
                <form action="">
                    <label for="content">Write a comment</label> <br>
                    <textarea name="content" id="content" cols="30" rows="10"></textarea> <br>
                    <input type="submit" value="comment">
                </form>
                <div class="w-full bg-black h-1 my-10"></div>
                @endauth
                <h2>Comments:</h2>
                @foreach ($comments as $comment)
                <div class="m-10">
                    <h2>{{ $comment->name }}</h2>
                    <p>{{ $comment->content }}</p>
                </div>
                @endforeach
                <div>
                    {{$comments->links()}}
                </div>
                <div class="w-full bg-black h-1 my-10"></div>
            </div>
            <div>
                <a href="{{route('blogs.index')}}" class="bg-indigo-500 p-2 text-white">Back</a>
            </div>
        </section>
    </main>
</body>

</html>