<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top header__navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#start">
        <img src="{{ asset('img/rrhh/logo-avca.png') }}" alt="Logo Avca" class="img-fluid" width="128">
      </a>
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 smooth-scroll">
          <li class="nav-item active">
            <a class="nav-link" href="#application">Oportunidades <span class="sr-only">(Oportunidades)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#about">¿Quienes sómos? <span class="sr-only">(¿Quienes sómos?)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#selection">Captación <span class="sr-only">(Captación)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#contact">Contáctenos <span class="sr-only">(Contáctenos)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link btn btn-info" href="/login">
              Acceder <span class="sr-only">(Acceder al sistema)</span>
              <i class="fas fa-lock"></i>
            </a>
          </li>                             
        </ul>              
      </div>
    </div>
  </nav>

  <!-- Texto principal -->
  <div class="header__hero" id="start">
    <div class="header__hero__text">
      <h1 class="text-left">
        Crea tu <span class="blue">Futuro</span> con <br>
        <div class="text-center">
          los <span class="green">Mejores</span>
        </div>
      </h1>
    </div>
    <div class="header__hero__arrow">
      <a href="#application" class="text-center">
        <span class="d-block mb-3">Únete a nuestro equipo</span>
        <br>
        <span class="d-block mx-auto">
          <img src="{{ asset('img/rrhh/arrow-imagen-down-blanco.png') }}" alt="">
        </span>
      </a>
    </div>
  </div>
</header>