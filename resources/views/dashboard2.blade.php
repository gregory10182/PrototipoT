<x-app-layout>

    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h1>Supermercado prototipo.</h1>
                <h2>DIrección / telefono / ciudad</h2>
            </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 15px;">
        <div class="col-6">
            <div class="card" style="height: 100%">
                <div class="card-body">
                    <h2>Ver categorias por productos</h2>
                    <div style="margin-top: 10px;">
                        <a class="btn btn-primary btn-block" href="categoria/1" role="button">Nike</a>
                    </div>
                    <div style="margin-top: 10px;">
                        <a class="btn btn-primary btn-block" href="categoria/2" role="button">Adidas</a>
                    </div>
                    <div style="margin-top: 10px;">
                        <a class="btn btn-primary btn-block" href="categoria/3" role="button">Rebook</a>
                    </div>
                    <div style="margin-top: 10px;">
                        <a class="btn btn-primary btn-block" href="categoria/4" role="button">New balance</a>
                    </div>
                    <div style="margin-top: 10px;">
                        <a class="btn btn-primary btn-block" href="categoria/5" role="button">converse</a>
                    </div>
                    <div style="margin-top: 10px;">
                        <a class="btn btn-primary btn-block" href="Busqueda" role="button">Buscar</a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">

                            @if(Auth::check())
                            <h1>Bienvenido {{ Auth::user()->name }}</h1>
                            <div style="margin-top: 10px;">
                                <a class="btn btn-primary btn-block" href="#" role="button">Mis datos</a>
                            </div>
                            <form method="GET" action="{{ route('cerrar-sesion') }}">
                                @csrf
                                <div style="margin-top: 10px;">
                                    <button type="submit" class="btn btn-primary btn-block">Cerrar sesión</button>
                                </div>
                            </form>
                            @else
                            <h1>Regístrate aquí:</h1>
                            <div style="margin-top: 10px;">
                                <a class="btn btn-primary btn-block" href="register" role="button">Soy nuevo cliente</a>
                            </div>
                            <div style="margin-top: 10px;">
                                <a class="btn btn-primary btn-block" href="login" role="button">Ingresar</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h1>Compra en línea aquí:</h1>
                            <div style="margin-top: 10px;">
                                <a class="btn btn-primary btn-block" href="#" role="button">Carrito de compras</a>
                            </div>
                            <div style="margin-top: 10px;">
                                <a class="btn btn-primary btn-block" href="#" role="button">Ver compras pasadas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
