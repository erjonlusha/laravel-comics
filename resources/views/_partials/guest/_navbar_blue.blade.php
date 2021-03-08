<nav class="navbar_blue">
    <ul class="nav justify-content-end">
        
        <li class="nav-item list-group-item parallelogramma">
            <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteName()=== 'home' ? 'active' : '' }}" >
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
        </li>
        
        <li class="nav-item list-group-item parallelogramma hover_blue">
            <a class="nav-link" href="#">
                <img src="{{ asset('img/dc-universe-infinite.svg') }}" alt="">
            </a>
        </li>
        
        <li class="nav-item list-group-item parallelogramma">
            <a class="nav-link" href="#">
                <img src="{{ asset('img/dc-shop.svg') }}" alt="">
            </a>
        </li>
        
        <li class="nav-item list-group-item parallelogramma">
            <a class="nav-link" href="#">
               <img src="{{ asset('img/dc-community.svg') }}" alt=""> 
            </a>
        </li>
        
        <li class="nav-item list-group-item parallelogramma">
            <a class="nav-link" href="#">
               <img src="{{ asset('img/dc-on-hbomax.svg') }}" alt=""> 
            </a>
        </li>
    </ul>
</nav>