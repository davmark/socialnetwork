<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Social Network</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        @yield('css')
    </head>
    <body>
        @include('templates.partials.navigation')
        <div class="container">
            @include('templates.partials.alerts')
            @yield('content')
        </div>
        @yield('js')
    </body>

</html>