<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./icons/brewtique-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-bgPrimary w-full">

    <div class="container w-full">
        @yield('content')
    </div>

    <script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
</body>

</html>
