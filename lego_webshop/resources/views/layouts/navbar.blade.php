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
            @auth
                <div class="d-flex align-items-center">
                    <img class="rounded-4 img-fluid" src="https://miro.medium.com/v2/resize:fit:1000/0*qS3X0bzoxuD03Vr-.jpg" alt="Avatar" style="max-width: 75px; max-height: 75px;">
                    <a class="ms-3">{{ auth()->user()->name }}</a>
                </div>
            @endauth
            @guest
                <a href="{{ route('register') }}" style="background-color: red;border-color: red" class="btn btn-primary">Belépés/Regisztráció</a >
            @endguest
        </div>
    </div>
     
      
    </div>
  </div>
</nav>
