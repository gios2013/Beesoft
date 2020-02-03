<a href="{{ route('datos/crear') }}" class="btn btn-success mt-4 ml-3">  Agregar </a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>correo</th>
            <th>acerca de mi</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $dat)
        <tr>
            <td class="v-align-middle">{{$dat->nombre}}</td>
            <td class="v-align-middle">{{$dat->correo}}</td>
            <td class="v-align-middle">{{$dat->acerca_de_mi}}</td>
            <td class="v-align-middle">
                <img src="{!! asset(" uploads/$dat->img") !!}" width="30" class="img-responsive">
            </td>
            <td class="v-align-middle">
 
                <form action="{{ route('datos/eliminar',$dat->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
 
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('datos/actualizar',$dat->id) }}" class="btn btn-primary">Editar</a>
 
                    <button type="submit" class="btn btn-danger">Eliminar</button>
 
                </form>
 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>