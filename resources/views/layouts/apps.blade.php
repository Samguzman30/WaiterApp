<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Waiter App</title>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
<body class="bg-gray-100 text-gray-800" >
<nav class="flex py-5 justify-start  text-black">
<p class="justify-end">Waiter app</p>



</nav>

    @yield('content')
</body>
</html>