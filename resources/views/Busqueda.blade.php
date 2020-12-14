<x-app-layout>
    <div class="row" style="margin-top: 10px;">
        <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h1>Busqueda</h1>
                <form class="d-flex">
                    <input name="bp" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}"> 
                    <button class="btn btn-outline-success"type="submit" href="Busquedas">Search</button>
                  </form>
            </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">cantidad</th>
            <th scope="col">precio</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($producto as $productos)
            <tr>
            <td>{{$productos->codigo}}</td>
            <td>{{$productos->nombre}}</td>
            <td>{{$productos->cantidad_disponible}}</td>
            <td>{{$productos->precio}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    

</x-app-layout>