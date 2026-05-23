<div class="container">
    <div class="row justify-content-between">



        @foreach($arbitros as $arbitro)
        <div class="col-md-5 mx-1">
            <div class="row tarjeta-fondo">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ Voyager::image('img/logoarbitro.png') }}" class="card-img-top" alt="...">
                            <br>
                            @php
                            $nombreCompleto = explode(' ', trim($arbitro->user->name));

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

                            <h2 class="title" style="color:#ff8800;">
                                {{ strtoupper($apellido) }}
                            </h2>
                            <hr>
                            ÁRBITRO
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    {{ $arbitro->user->celular }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    {{ $arbitro->user->documento }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-7 ">
                    <div class="row">
                        <div class="col-md-12">
                            <img id="preview" src="{{ Voyager::image($arbitro->user->avatar) }}" class="">
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

        @endforeach

    </div>
</div>