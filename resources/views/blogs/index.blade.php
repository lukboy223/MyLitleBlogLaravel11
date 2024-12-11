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
            <a href="{{ route('login') }}">login</a><br>
            <a href="{{ route('register') }}">register</a>
            @endguest
            @auth
            <a href="">Create Blog</a><br>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="logout">
            </form>
            @endauth
        </nav>
    </header>
    <main>
        <section class="w-full pl-60 pr-60">
            @foreach ($blogs as $blog)
                <div class="m-5 p-5 border-2 border-black">
                    <a href="{{route('blogs.view', $blog->id)}}">
                        <h2>{{ $blog->title }}</h2>
                    </a>
                </div>
            @endforeach
        </section>
    </main>
</body>
</html>