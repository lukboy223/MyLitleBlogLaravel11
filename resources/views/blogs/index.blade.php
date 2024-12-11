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

    <header>
        <nav>
            @guest
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>
            @endguest
        </nav>
    </header>
    <main>
        <section class="w-full pl-60">
            @foreach ($blogs as $blog)
                <div class="m-10">
                    <a href="{{route('blogs.view', $blog->id)}}">
                        <h2>{{ $blog->title }}</h2>
                    </a>
                </div>
            @endforeach
        </section>
    </main>
</body>
</html>