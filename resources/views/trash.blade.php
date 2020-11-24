@extends('layout')
@section('content')
<div class="container">
    <div class="row p-4">
        <div class="col-sm-4">
            <div class="p-4">
                <a href="{{ route('home.index') }}">
                    <button class="btn btn-primary">Volver al inicio</button>
                </a>
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