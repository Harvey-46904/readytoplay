@php
        $user = auth()->user();
        //->where('tecnico',$user->id) esta validacion
    $equipos = App\Models\Equipo::all();
@endphp
<div class="container py-4">
    <div class="row g-4">

        @foreach($equipos as $equipo)

        <div class="col-12 col-sm-6 col-lg-4">
            
            <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

                <!-- Banner -->
                <div class="position-relative">
                    <img 
                        src="{{ asset('storage/' . $equipo->logo) }}" 
                        class="card-img-top"
                        style="height: 240px; object-fit: cover;"
                        alt="{{ $equipo->nombre }}"
                    >

                   
                </div>

                <!-- Contenido -->
                <div class="card-body d-flex flex-column">

                    <!-- Nombre -->
                    <h4 class="fw-bold mb-3 text-dark">
                        {{ $equipo->nombre }}
                    </h4>

                   

                    <!-- Información -->
                    <div class="text-secondary mb-4" style="
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                    ">
                        {!! $equipo->informacion !!}
                    </div>

                    <!-- Botón -->
                    <a href="#" class="btn btn-success rounded-pill mt-auto fw-semibold">
                       ver Jugadores Inscritos
                    </a>

                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>