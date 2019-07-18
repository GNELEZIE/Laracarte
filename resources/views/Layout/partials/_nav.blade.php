<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Laracarte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link {{ set_Active_route('home') }}" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ set_Active_route('about') }}" href="{{ route('about') }}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                  
                </ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Planet
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Laravel.com</a>
                <a class="dropdown-item" href="#">Laravel.news</a>
                <a class="dropdown-item" href="#">Laravel.io</a>
                <a class="dropdown-item" href="#">Laracarte</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
                    <a class="nav-link {{ set_Active_route('contact') }}" href="{{ route('contact') }}">Contacts</a>
                  </li>
            
          </ul>
          <ul class="nav navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                   </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">Register</a>
                </li>
             </ul>
        </div>
    
      </nav>