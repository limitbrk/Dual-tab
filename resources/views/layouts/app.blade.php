<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Ford</title>
        <link rel="shortcut icon" href={{ asset("favicon.ico") }} />

        <!-- Script -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- sStyle -->
        <link href={{ asset("css/app.css") }}  rel="stylesheet">
        <link href={{ asset("css/custom.css") }}  rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand navbar-fixed-top navbar-dark bg-dark main-nav">
                <div class="container">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item">
                            <a  class="nav-link @if(Request::is('/')) active @endif" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('review')) active @endif" href="review">Review</a>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')
        </div>
    </body>
</html>
