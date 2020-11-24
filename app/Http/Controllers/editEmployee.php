<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class editEmployee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = Employees::find($id);
        $nombre = $user->nombre;
        $departamento = $user->departamento;
        $cargo = $user->cargo;
        return view('editar', ['id' => $id,'nombre' => $nombre, 'departamento' => $departamento, 'cargo' => $cargo]);
    }
}
