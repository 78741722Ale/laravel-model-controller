<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link a Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <!-- SiteHeader -->
    <header class="bg-warning h-25">
        Io sono l'header
    </header>
    <!-- SiteMain -->
    <main>
        <!-- Con lo Yield io posso richiamare la sezione richiesta.
        Qua richiamo quella presente in /movies  -->
        @yield('content')
    </main>
    <!-- SiteFooter -->
    <header>
        Io sono il footer
    </header>
</body>
</html>
