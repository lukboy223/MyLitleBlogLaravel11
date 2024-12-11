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
        <section class="w-full pl-60">
            <div>
                <h2>{{$user->name}}</h2>
            </div>
            <div class="m-10">
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->content }}</p>
            </div>
            <div>
                <a href="{{route('blogs.index')}}" class="bg-indigo-500 p-2 text-white">Back</a>
            </div>
        </section>
    </main>
</body>
</html>