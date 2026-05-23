@php
    $escuelas = App\Models\Escuela::all();
@endphp
<div class="container py-4">
    <div class="row g-4">

        @foreach($escuelas as $escuela)

        <div class="col-12 col-sm-6 col-lg-4">
            
            <div class="card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

               

                <!-- Contenido -->
                <div class="card-body d-flex flex-column">

                    <!-- Nombre -->
                    <h4 class="fw-bold mb-3 text-dark text-center">
                        {{ $escuela->nombre }}
                    </h4>

                   
                   

                    <!-- Botón -->
                    <a  href="{{ route('escuela.detalle', $escuela->id) }}" class="btn btn-success rounded-pill mt-auto fw-semibold">
                       Ver todos los árbitros
                    </a>

                </div>
            </div>

        </div>

        @endforeach

    </div>
</div>