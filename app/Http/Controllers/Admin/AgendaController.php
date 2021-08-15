<?php



namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Paciente;
use App\Agenda;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agendas = DB::table('agendas')
                        ->join('users', 'users.id', '=', 'agendas.user_id')
                        ->join('pacientes', 'pacientes.id', '=', 'agendas.paciente_id')
                        ->select('agendas.*', 'users.name as usuario', 'pacientes.nome as paciente')
                        ->get();

        $user = Auth::user();
        $registros = Agenda::with('pacientes');
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>'','titulo'=>'Prontuarios']
        ];
        return view('admin.agendas.index',compact('agendas','caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = Auth::user();    
        $pacientes = Paciente::All();

        $caminhos = [
                ['url'=>'/admin','titulo'=>'Admin'],
                ['url'=>route('agendas.index'),'titulo'=>'Prontuarios'],
                ['url'=>'','titulo'=>'Adicionar']
            ];
      
            return view('admin.agendas.adicionar',compact('caminhos', 'pacientes', 'usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id = $request->user_id;
        $paciente_id = $request->paciente_id;
        $titulo = $request->nome;
        $descricao = $request->descricao;

        if(!empty($paciente_id)){
            // Agenda::create($request->all());
  
            // return redirect()->route('agendas.index');
            DB::table('agendas')->insert(
                [
                    'user_id' => $user_id, 
                    'paciente_id' => $paciente_id ,
                    'nome' => $titulo,
                    'descricao' => $descricao
                ]
            );
            return redirect()->route('agendas.index');
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
        $usuario = Auth::user();    
        $registro = Agenda::find($id);
        $pacientes = Paciente::All();


        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('agendas.index'),'titulo'=>'Prontuarios'],
            ['url'=>'','titulo'=>'Editar']
            ];
      
            return view('admin.agendas.editar',compact('caminhos', 'registro', 'pacientes','usuario'));
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

        $user_id = $request->user_id;
        $paciente_id = $request->paciente_id;
        $titulo = $request->nome;
        $descricao = $request->descricao;

        DB::table('agendas')
            ->where('id', $id)
            ->update([
                'paciente_id' => $paciente_id ,
                'nome' => $titulo,
                'descricao' => $descricao
            ]);

          return redirect()->route('agendas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "teste";
        die();

        Agenda::find($id)->delete();
        return redirect()->route('agendas.index');
    }
}
