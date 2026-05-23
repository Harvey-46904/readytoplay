@extends('theme::layouts.app')

@section('content')

<div class="py-20">
    <div class="sm:mx-auto sm:w-full sm:max-w-5xl">

        <h1 class="max-w-md text-4xl font-extrabold green sm:mx-auto lg:max-w-none lg:text-5xl sm:text-center">
            {{$torneo->nombre}}</h1>
        <p class="max-w-md mx-auto mt-5 text-lg text-light lg:max-w-none lg:text-xl sm:text-center">categoria:
            {{$torneo->categoria}} </p>
        <p class="max-w-md mx-auto mt-5 text-lg text-light lg:max-w-none lg:text-xl sm:text-center">inicio:
            {{$torneo->fecha_inicio}} </p>
    </div>


</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $torneo->banner) }}" class="card-img-top"
                style="" alt="{{ $torneo->nombre }}">
        </div>
        <div class="col-md-6">


            {!! $torneo->informacion !!}
        </div>
    </div>
</div>
<div class="py-20">
    <div class="sm:mx-auto sm:w-full sm:max-w-5xl">

        <h1 class="max-w-md text-4xl font-extrabold green sm:mx-auto lg:max-w-none lg:text-5xl sm:text-center">
            Equipos Participantes</h1>
       
    </div>


</div>
<div class="marquee">

    <div class="marquee-track">

       @foreach($equipos as $equipo)

    <div class="equipo-item">
        <img src="{{ Voyager::image($equipo->logo) }}">

        <h4 class="green">
            {{$equipo->nombre}}
        </h4>
    </div>

@endforeach

@foreach($equipos as $equipo)

    <div class="equipo-item">
        <img src="{{ Voyager::image($equipo->logo) }}">

        <h4 class="green">
            {{$equipo->nombre}}
        </h4>
    </div>

@endforeach

    </div>

</div>


@endsection