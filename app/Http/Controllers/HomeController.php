<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use App\Usuario;
use App\VeiculoSensor;
use DB;
class HomeController extends Controller
{
    //
    public function index(){

       $log=DB::table('tVeiculo')->leftJoin('tUsuario','tVeiculo.IDUsuario','=','tUsuario.IDUsuario')->leftJoin('tVeicSensor','tVeiculo.IdTerminal','=','tVeicSensor.IdTerminal')->get();
        return view('home')->with('log',$log);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
     /*   $this->validate($request, ['titulo' => 'required', ]);
        Configuraco::create($request->all());
        Session::flash('flash_message', 'Configuraco added!');*/
        return redirect('admin/parametros');
    }
    public function show($id)
    {
        $log=DB::table('tVeiculo')->leftJoin('tUsuario','tVeiculo.IDUsuario','=','tUsuario.IDUsuario')->leftJoin('tVeicSensor','tVeiculo.IdTerminal','=','tVeicSensor.IdTerminal')->get();
        return view('home')->with('log',$log);
    }
    /**
     * Show tenho the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        /*$configuraco = Configuraco::findOrFail($id);*/
        //return view('', compact(''));
        return $id;
    }

}
