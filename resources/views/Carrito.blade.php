<x-app-layout>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h1>Carrito</h1>
                <form class="d-flex">
                    <input name="agca" class="form-control me-2" type="search" placeholder="Codigo" aria-label="Search"> 
                    <button class="btn btn-outline-success"type="submit" href="Busquedas">Agregar</button>
                  </form>
                  <form class="d-flex">
                    <input name="quica" class="form-control me-2" type="search" placeholder="Codigo" aria-label="Search"> 
                    <button class="btn btn-outline-success"type="submit" href="Busquedas">Eliminar</button>
                  </form>
            </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row" style="background-color: darkgrey;">
                        @foreach ($producto as $productos)
                            <div class="col-4" >
                                <div style="margin: 5px 0px 5px 0px; background-color: white;">
                                    <div class="row">
                                        <div class="col-6">
                                            @if($productos->imagen)
                                                <img src='{{$productos->imagen}}' />
                                            @else
                                                Imagen no disponible
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <p>{{$productos->nombre}}</p>
                                            <p>{{$productos->codigo}}</p>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{$productos->precio}}</p>
                                            <p>Existencias: {{$productos->cantidad_disponible}} {{$productos->presentacion}}</p>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
