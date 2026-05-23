@extends('theme::layouts.app')

@section('content')



<!-- HERO -->
<section class="hero" id="inicio">
  <div class="container text-center">
    <h1>Bienvenido a <span class="green">ReadytoPlay</span></h1>
    <p class="lead mt-4 mb-4">
      La plataforma definitiva para seguir deportes locales, rankings,
      árbitros, puntuaciones y votaciones de jugadores.
    </p>

    <a href="#ranking" class="btn btn-green btn-lg px-5">
      Explorar Rankings
    </a>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5 bg-black" id="ranking">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="section-title green">Sistema Deportivo Inteligente</h2>
      <p>Todo lo que necesitas para gestionar y seguir competencias locales.</p>
    </div>

    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <div class="card card-custom text-center p-4">
          <i class="bi bi-trophy-fill green fs-1"></i>
          <h4 class="mt-3 green">Clasificación de Jugadores</h4>
          <p class="text-light">Ranking actualizado de los mejores jugadores según rendimiento.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card card-custom text-center p-4">
          <i class="bi bi-person-badge-fill green fs-1"></i>
          <h4 class="mt-3 green">Clasificación de Árbitros</h4>
          <p class="text-light">Evaluación y puntuación de árbitros en tiempo real.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card card-custom text-center p-4">
          <i class="bi bi-star-fill green fs-1"></i>
          <h4 class="mt-3 green">Puntuación de Jugadores</h4>
          <p class="text-light">Sistema moderno de puntuaciones y estadísticas deportivas.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card card-custom text-center p-4">
          <i class="bi bi-shield-fill-exclamation green fs-1"></i>
          <h4 class="mt-3 green">Control de Sanciones</h4>
          <p class="text-light">Registro y seguimiento de sanciones disciplinarias.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="position-relative py-5 overflow-hidden" id="proceso">

  <!-- Imagen fondo -->


  <!-- Capa oscura -->
  <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>

  <!-- Contenido -->
  <div class="container position-relative" style="z-index: 2;">

    <div class="text-center text-white mb-5">
      <h2 class="display-4 fw-bold">
        PROCESO <span style="color:#00ff88;">READY TO PLAY</span>
      </h2>

      <p class="lead">
        Control inteligente para jugadores, árbitros y torneos.
      </p>
    </div>

    <img src="{{ Voyager::image('img/proceso.png') }}" class="" alt="Proceso Ready To Play">

  </div>

</section>

<!-- VOTACIONES -->
<section class="py-5 fondo-contenedor" id="votaciones">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6">
        <h2 class="section-title green">Vota por tu Jugador Favorito</h2>
        <p>
          Los usuarios pueden participar activamente votando por los mejores
          jugadores de la temporada.
        </p>

        <button class="btn btn-green btn-lg mt-3">
          Votar Ahora
        </button>
      </div>

      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="{{ Voyager::image('img/jugador.png') }}" class="img-fluid rounded shadow" alt="Jugador">
      </div>

    </div>
     <div class="row align-items-center">
      <div class="col-lg-6 text-center mt-4 mt-lg-0">
        <img src="{{ Voyager::image('img/arbitro.png') }}" class="img-fluid rounded shadow" alt="Jugador">
      </div>
      <div class="col-lg-6">
        <h2 class="section-title green">Vota por el arbitro</h2>
        <p>
          Los usuarios pueden participar activamente votando por el arbitro
        </p>

        <button class="btn btn-green btn-lg mt-3">
          Votar Ahora
        </button>
      </div>



    </div>
  </div>
</section>




<!-- CONTACTO -->
<section class="py-5 bg-black" id="contacto">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title green">Contacto</h2>
      <p>¿Quieres registrar tu torneo o equipo?</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nombre">
          </div>

          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Correo electrónico">
          </div>

          <div class="mb-3">
            <textarea class="form-control" rows="5" placeholder="Mensaje"></textarea>
          </div>

          <div class="text-center">
            <button class="btn btn-green btn-lg">
              Enviar Mensaje
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection