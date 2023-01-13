<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Waiter App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/resources/css/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
                fontFamily: {
                    'montserrat' : ['Montserrat', 'sans-serif']
                }
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>

    

</head>
<body class="bg-gray-100 text-gray-800" >

    @yield('content')
</body>
</html>