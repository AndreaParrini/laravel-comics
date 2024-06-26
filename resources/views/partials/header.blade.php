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
            <a href="/"><img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="Logo" srcset=""></a>
            <ul>
                <li class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}"><a  href="{{Route('characters')}}">Characters</a></li>
                <li class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}"><a  href="{{Route('comics')}}">Comics</a></li>
                <li class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}"><a  href="{{Route('movies')}}">Movies</a></li>
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