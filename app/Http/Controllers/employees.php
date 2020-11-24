<?php

namespace App\Http\Controllers;

use App\Models\Employees as ModelsEmployees;
use Illuminate\Http\Request;

class employees extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employees = ModelsEmployees::get();
        $i = count($Employees);

        return view('home')->with(['Employees' =>  $Employees, 'i' => $i]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsEmployees::create([
            'nombre' => request('nombre'),
            'departamento' => request('departamento'),
            'cargo' => request('cargo')
        ]);

        return redirect('/api/home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = ModelsEmployees::find($id);
        $user->nombre = request('nombre');
        $user->departamento = request('departamento');
        $user->cargo = request('cargo');
        $user->save();
        return redirect('api/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsEmployees::find($id)->delete();
        return redirect('/api/home');
    }
}
