<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title','My First Laravel Project!')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body { background-color: #fff; color: #636b6f; font-family: 'Nunito', sans-serif; font-weight: 200; margin: 0; }
            .menu{ top: 0; position: fixed; padding: 3vh 0; border-bottom: 1px solid #eee; z-index: 1; width: 100%; text-align: center; background: white; }
            .full-height { height: auto; }
            .flex-center { align-items: center; display: flex; justify-content: center; }
            .position-ref { position: relative; }
            .top-right { position: absolute; right: 10px; top: 18px; }
            .content { text-align: center; margin-top: 10vh; }
            .title { font-size: 84px; }
            .links > a { color: #636b6f; padding: 0 25px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase; }
            .m-b-md { margin-bottom: 30px; }
            .float-left { float: left; }
            .float-right { float: right; }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="menu links"> 
                <a href="/">Home</a> 
                <a href="/about-me">About Me</a> 
                <a href="/contact-me">Contact Me</a> 
                <a href="/blog">Blog</a>
            </div>
            <div class="content col-sm-5"> 
                @yield('page-content')
            </div>
        </div>
    </body>
</html>
