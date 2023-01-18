<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Waiter App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/resources/css/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    
    <style>
      .background{
        background-image: url("{{asset('images/background.png')}}");
        
        
      }
    </style>
    <script>
        tailwind.config = {
          theme: {
            extend: {
                fontFamily: {
                    'montserrat' : ['Montserrat', 'sans-serif']
                }
                backgroundImage: {
                     'hero': "url('./background.jpg')",
      },
                
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>

    

</head>
<body class="background mx-auto" >

    @yield('content')
</body>
</html>