@extends('layout')
@section('content')
<div class="container">
    <div class="row p-4">
        <div class="col-sm-4">
            <div class="card p-4">
                <form action="{{ route('home.store') }}" method="post">
                    @csrf
                    <h4>Agregar empleado</h4>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required placeholder="Escribe aquí...">
                    </div>
                    <div class="form-group">
                        <label for="">Departamento</label>
                        <input type="text" name="departamento" class="form-control" required placeholder="Escribe aquí...">
                    </div>
                    <div class="form-group">
                        <label for="">Cargo</label>
                        <input type="text" name="cargo" class="form-control" required placeholder="Escribe aquí...">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <a href="{{ route('trash.index') }}">
                        <button type="button" class="btn btn-secondary">Basura</button>
                    </a>

                  </form>
            </div>
        </div>
        <div class="col-sm-8">
            @if ($i > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Departamento</th>
                        <th>Cargo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Employees as $Employee)
                        <tr>
                            <td>{{ $Employee['nombre'] }}</td>
                            <td>{{ $Employee['departamento'] }}</td>
                            <td>{{ $Employee['cargo'] }}</td>
                            <td>
                                <div style="display: flex">
                                    
                                    <a href="{{ "/api/editar/{$Employee['id']}" }}"><button class="btn btn-warning text-white mr-2">Editar</button></a>
                                    <form action="{{ "/api/home/{$Employee['id']}" }}" method="post">
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"> Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>                
            @else
                <h4 style="text-align: center">No hay empleados registrados</h4>
            @endif
        </div>
    </div>
</div>

@endsection