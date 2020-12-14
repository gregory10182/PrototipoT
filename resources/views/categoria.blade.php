<x-app-layout>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h1>Supermercado prototipo.</h1>
                <h2>Dirección / telefono / ciudad</h2>
            </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row" style="margin-top: 10px;">
                        @foreach ($categorias as $categoria)
                            <div class="col-3" style="margin-bottom: 5px;">
                                <a class="btn btn-primary btn-block" href="{{$categoria->id}}" role="button">{{$categoria->marca}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h3>{{$categoriaBase->marca}}</h3>
                    <div class="row" style="background-color: darkgrey;">
                        @foreach ($categoriaBase->productos as $producto)
                            <div class="col-4" >
                                <div style="margin: 5px 0px 5px 0px; background-color: white;">
                                    <div class="row">
                                        <div class="col-6">
                                            @if($producto->imagen)
                                                <img src='{{$producto->imagen}}' />
                                            @else
                                                Imagen no disponible
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <p>{{$producto->nombre}}</p>
                                            <p>{{$producto->codigo}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p>{{$producto->precio}}</p>
                                            <p>Existencias: {{$producto->cantidad_disponible}} {{$producto->presentacion}}</p>
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
