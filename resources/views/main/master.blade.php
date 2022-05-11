<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/portafolio.css') }}">
</head>

<body>
    <!--Navbar -->
    @include('main.navbar')
    <!--Hearder -->
    @include('main.hearder')
    <!--sections About -->
    @include('main.about')
    <!-- section Portafolio-->
    @include('main.portafolio')
    <!-- section contact -->
    @include('main.contac')
    <!-- footer -->
    @include('main.footer')
</body>

</html>
