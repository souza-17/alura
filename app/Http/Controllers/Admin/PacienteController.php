<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Paciente;
use Auth;


use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Paciente::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Pacientes']
        ];
        return view('admin.pacientes.index',compact('registros','caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('pacientes.index'),'titulo'=>'Pacientes'],
            ['url'=>'','titulo'=>'Adicionar']
            ];
      
            return view('admin.pacientes.adicionar',compact('caminhos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request)){
            Paciente::create($request->all());
  
            return redirect()->route('pacientes.index');
        }
  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $registro = Paciente::find($id);
        $usuario = Auth::user();

        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('pacientes.index'),'titulo'=>'Pacientes'],
            ['url'=>'','titulo'=>'Editar']
            ];
      
        return view('admin.pacientes.editar',compact('caminhos', 'registro', 'usuario'));
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
        
        $update = Paciente::find($id)->update($request->all());

        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index');
    }
}
