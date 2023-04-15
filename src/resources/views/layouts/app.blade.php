<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('css/style.css') }}"
        />
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div class="content">@yield('content')</div>
        <div class="footer">@yield('footer')</div>
    </body>
</html>
