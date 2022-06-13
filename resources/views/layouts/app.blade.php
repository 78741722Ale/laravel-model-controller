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
    <header class="flex_cent" id="site_header">
        <h2 class="text-uppercase mb-0">Io sono l'header</h2>
    </header>
    <!-- SiteMain -->
    <main class="flex_cent" id="site_main">
        <!-- Con lo Yield io posso richiamare la sezione richiesta.
        Qua richiamo quella presente in /movies  -->
        @yield('content')
    </main>
    <!-- SiteFooter -->
    <header class="flex_cent" id="site_footer">
        <h2 class="text-uppercase mb-0">Io sono il footer</h2>
    </header>
</body>
</html>
