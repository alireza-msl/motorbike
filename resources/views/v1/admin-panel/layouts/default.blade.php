<html>
    <head>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <meta charset="utf-8">
        <style>
            body {
                direction: rtl;
                background-color: #e3e3e3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>