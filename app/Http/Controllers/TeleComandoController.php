<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock;
use DB;

class TeleComandoController extends Controller
{
    //
    public function index(){

        //$log=DB::table('vwTeleComando')->join('tMensagem','vwTeleComando.CodMsg','=','tMensagem.CodMsg','inner')->join('tOpRemota','vwTeleComando.IDSequencia','=','tOpRemota.IDSequencia','inner')->join('tCfgTransicao','vwTeleComando.IDSequencia','=','tCfgTransicao.IDSequencia','left outer')->orderBy('DataHoraEm','desc')->take(100)->get();
        $log=DB::table('vwTeleComando')
                ->join('tMensagem','vwTeleComando.CodMsg','=','tMensagem.CodMsg','inner')
                ->join('tOpRemota','vwTeleComando.IDSequencia','=','tOpRemota.IDSequencia','inner')
                ->join('tCfgTransicao','vwTeleComando.IDSequencia','=','tCfgTransicao.IDSequencia','left outer')//caso haja registro na tabela de transição
                ->orderBy('DataHoraEm','desc')
                ->take(100)
                ->get();
        $msg=DB::table('tMensagem')->distinct('CodMsg')->get();
        $result=json_encode($log);


        return view('telecomandos')->with('log',$log)->with('msg',$msg);

    }
    public function store(Request $request){

        $format='Y-m-d H:i:s';
      //  $dataini = \DateTime::createFromFormat($format, $request->dataini);
       // $datafim = \DateTime::createFromFormat($format, $request->datafim);
        $campopesquisa=NULL;
            switch ($request->tipofiltro){
                case 1:
                        $campopesquisa='IDTerminal';
                    break;
                case 2:
                    $campopesquisa='Veiculo';
                    break;

                default:
                    $campopesquisa=NULL;
                    break;
            }



        $log=DB::table('vwTeleComando')
            ->join('tMensagem','vwTeleComando.CodMsg','=','tMensagem.CodMsg','inner')
            ->join('tOpRemota','vwTeleComando.IDSequencia','=','tOpRemota.IDSequencia','inner')
            ->join('tCfgTransicao','vwTeleComando.IDSequencia','=','tCfgTransicao.IDSequencia','left outer')//caso haja registro na tabela de transição

            ->whereDate('DataHoraEm','>=',date($format,strtotime($request->dataini)))
            ->whereDate('DataHoraEm','<=',date($format,strtotime($request->datafim)))
            ->where($campopesquisa,'like','%'.$request->filtro.'%')
            ->orderBy('DataHoraEm','desc')
            ->take(100)
            ->get();

        $msg=DB::table('tMensagem')->distinct('CodMsg')->get();

        //return $teste;
        //return view('telecomandos')->with('log',$log)->with('msg',$msg);
       return  view('telecomandos')->with('log',$log)->with('msg',$msg);

     //   return 'dataini:'. $request->dataini;


    }
}
