<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.header_link') 
    <title>@yield('title_page')</title>
</head>
<body>
    <header>
        <div class="container">
            @include('partials.header')

        </div>
    </header>
    <main>
        <div class="container">

            @yield('content')
        </div>
    </main>
    <footer>
        <div class="container">
            @include('partials.footer')

        </div>

    </footer>
    
</body>
</html>