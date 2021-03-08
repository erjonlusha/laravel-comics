<div class="container_navbar">
    <div id="navbar">
        <nav  class="nav_on_scroll navbar navbar-expand-lg d-flex justify-content-start ">    
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Characters</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comics</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movies</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tv</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Videos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">DC Shop</a>
                            <a class="dropdown-item" href="#">Print Subscription</a>
                            <a class="dropdown-item" href="#">Comic shop locator</a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="search_bar d-flex justify-content-end">
                <input  placeholder="Search">
                <button class="search_button"><img src="{{ asset('img/search-icon.png') }}" alt=""></button>
            </div>
        </nav>
    </div>
</div>