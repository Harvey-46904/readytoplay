@php
    $torneos = App\Models\Torneo::all();
@endphp
<div class="container py-4">
    <div class="row g-4">

        @foreach($torneos as $torneo)

        <div class="col-12 col-sm-6 col-lg-4">
            
            <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

                <!-- Banner -->
                <div class="position-relative">
                    <img 
                        src="{{ asset('storage/' . $torneo->banner) }}" 
                        class="card-img-top"
                        style="height: 240px; object-fit: cover;"
                        alt="{{ $torneo->nombre }}"
                    >

                    <!-- Categoria -->
                    <span class="position-absolute top-0 start-0 m-3 badge bg-success px-3 py-2 rounded-pill">
                        {{ $torneo->categoria }}
                    </span>
                </div>

                <!-- Contenido -->
                <div class="card-body d-flex flex-column">

                    <!-- Nombre -->
                    <h4 class="fw-bold mb-3 text-dark">
                        {{ $torneo->nombre }}
                    </h4>

                    <!-- Fecha -->
                    <p class="text-muted small mb-3">
                        📅 {{ \Carbon\Carbon::parse($torneo->fecha_inicio)->format('d M Y') }}
                    </p>

                    <!-- Información -->
                    <div class="text-secondary mb-4" style="
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                    ">
                        {!! $torneo->informacion !!}
                    </div>

                    <!-- Botón -->
                    <a href="#" class="btn btn-success rounded-pill mt-auto fw-semibold">
                       
                    </a>

                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>