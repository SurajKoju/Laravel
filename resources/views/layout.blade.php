<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Layout')</title>

        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        
    </head>
    
    <body>

        <header class = "py-5">
            <div class = "flex justify-center gap-4">
                <p class = "text-center">
                    <a href="{{ route('home') }}">Home</a>
                </p>

                <p class = "text-center">
                    <a href="{{ route('form') }}">Post</a>
                </p>
            </div>
        </header>

        <div class = "app_content py-10">
            <div class = "container mx-auto">
                @yield('content')            
            </div>
        </div>

        <footer></footer>

        @yield('scripts')  
    </body>
</html>
