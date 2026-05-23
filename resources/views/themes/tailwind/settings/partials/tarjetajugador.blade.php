@php
        $user = auth()->user();
        //->where('tecnico',$user->id) esta validacion
    
@endphp
<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-6 mx-1">
            <div class="row tarjeta-fondo-jugador">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ Voyager::image('img/logojugador.png') }}" class="card-img-top" alt="...">
                            <br>
                            @php
                            $nombreCompleto = explode(' ', trim($user->name));

                            if(count($nombreCompleto) >= 4){
                            // Harvey Eduardo Riascos Benavides
                            $primerNombre = $nombreCompleto[0];
                            $apellido = $nombreCompleto[2];
                            }elseif(count($nombreCompleto) == 3){
                            // Harvey Eduardo Riascos
                            $primerNombre = $nombreCompleto[0];
                            $apellido = $nombreCompleto[2];
                            }elseif(count($nombreCompleto) == 2){
                            // Harvey Riascos
                            $primerNombre = $nombreCompleto[0];
                            $apellido = $nombreCompleto[1];
                            }else{
                            // Solo Harvey
                            $primerNombre = $nombreCompleto[0];
                            $apellido = '';
                            }
                            @endphp

                            <h2 class="title text-white">
                                {{ strtoupper($primerNombre) }}
                            </h2>

                            <h2 class="title" style="color:#00ff88;">
                                {{ strtoupper($apellido) }}
                            </h2>
                            <hr>
                            Jugador
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    {{ $user->celular }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    {{ $user->documento }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-7 ">
                    <div class="row">
                        <div class="col-md-12">
                            <img id="preview" src="{{ Voyager::image($user->avatar) }}" class="">
                        </div>
                    </div>
                    <div class="row text-center bg-black border border-light rounded-start">
                        <div class="col-6">
                            🏆<br>
                            <small class="text-secondary">Partidos</small><br>
                            <h1>0</h1>
                        </div>

                        <div class="col-6">
                            ⭐<br>
                            <small class="text-secondary">Rating</small><br>
                             <h1>0</h1>
                        </div>

                    </div>

                </div>
            </div>






        </div>

      

    </div>
</div>