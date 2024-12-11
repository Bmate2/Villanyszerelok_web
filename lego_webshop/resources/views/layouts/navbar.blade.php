<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg bg-warning" style="background-color: yellow; ">
  <div class="container-fluid" >
    <a class="navbar-brand" href="#">Lego Webáruház</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Főoldal</a>
        </li>
       
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Áruk szűrése
        </a>
        <ul class="dropdown-menu" style="background-color:yellow" red aria-labelledby="navbarDropdown">
          <li><a  href="{{ route('aruk') }}" class="dropdown-item" >Minden áru</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Valamilyen áruk</a></li>
          
          <li><a class="dropdown-item" href="#">Amolyan áruk</a></li>
        </ul>
      </li>
      

        
      </ul>
      <div class="container-fluid">
    <div class="d-flex justify-content-end align-items-center">

    @if ($totalCount > 0)
    <a href="{{ route('cart.show') }}" class="nav-link active" style="margin-right:30px;"> 🛒 Kosár({{ $totalCount }})</a>
@else
    <a href="{{ route('cart.show') }}" class="nav-link active" style="margin-right:30px;"> 🛒 Kosár</a>
@endif


        @auth
            <div class="d-flex align-items-center">
                
              
                <div class="dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img class="rounded-4 img-fluid" src="https://miro.medium.com/v2/resize:fit:1000/0*qS3X0bzoxuD03Vr-.jpg" alt="Avatar" style="max-width: 75px; max-height: 75px;margin:10px">
                      {{ ucfirst(auth()->user()->name) }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @if(auth()->user()->isAdmin())
                      <li>
                          <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin - Termékek kezelése</a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="{{ route('admin.orders') }}">Admin - Rendelések kezelése</a>
                      </li>
                      <li><hr class="dropdown-divider"></li>    
                      @endif
                      <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profilom</a></li>
                      <li><hr class="dropdown-divider"></li>                      
                      
                      <li>
                          <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item">Kijelentkezés</button>
                          </form>
                      </li>
                  </ul>
              </div>
            </div>
        @endauth
        
        @guest
            <a href="{{ route('register') }}" style="background-color: red; border-color: red" class="btn btn-primary">Belépés/Regisztráció</a>
        @endguest
    </div>
</div>
     
      
    </div>
  </div>
</nav>
