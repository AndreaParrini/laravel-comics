<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fontawsom v6.5.2 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <header>
            <div class="header-plus">
                <div class="container">
                    <ul>
                        <li>Dc power visa<i class="fa-regular fa-registered"></i> </li>
                        <li>Addittional DC Sites<i class="fa-solid fa-caret-down"></i></li>
                    </ul>
                </div>
            </div>
            <div class="container">
               <nav>
                    <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="Logo" srcset="">
                    <ul>
                        <li><a  href="/">Characthers</a></li>
                        <li class="active"><a  href="/">Comics</a></li>
                        <li><a href="/">Movies</a></li>
                        <li><a href="/">TV</a></li>
                        <li><a href="/">Games</a></li>
                        <li><a href="/">Collectibles</a></li>
                        <li><a href="/">Videos</a></li>
                        <li><a href="/">Fans</a></li>
                        <li><a href="/">News</a></li>
                        <li><a href="/">Shop<i class="fa-solid fa-caret-down"></i></a></li>
                    </ul>
                    <div>
                        <input type="text" name="" id="" placeholder="Search">
                        <button><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                    </div>
                </nav> 
            </div>   
        </header>
    </body>
</html>
