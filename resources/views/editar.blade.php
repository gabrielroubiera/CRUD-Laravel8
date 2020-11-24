@extends('layout')
@section('content')
<div class="card p-4" style="
    width: 350px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
">
    <form action="{{ "/api/home/{$id}" }}" method="post">
        @method("patch")
        @csrf
        <h4>Editar empleados</h4>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value = "{{ $nombre }}" placeholder="Escribe aquí...">
        </div>
        <div class="form-group">
            <label for="">Departamento</label>
            <input type="text" name="departamento" class="form-control" required value = "{{ $departamento }}" placeholder="Escribe aquí...">
        </div>
        <div class="form-group">
            <label for="">Cargo</label>
            <input type="text" name="cargo" class="form-control" required value = "{{ $cargo }}" placeholder="Escribe aquí...">
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('home.index') }}">
            <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
      </form>
</div>
@endsection