<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <section>
            @foreach ($blogs as $blog)
                <div>
                    <h2>{{ $blog->title }}</h2>
                </div>
            @endforeach
        </section>
    </main>
</body>
</html>