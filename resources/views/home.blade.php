@extends('layouts.app')

@section('content')
    <script>
        setTimeout(function(){
            location.reload();
        },95000); // 5000 milliseconds means 5 seconds.
    </script>

        <div class="row">
            <label>Pesquisar</label>

        </div>



    <div class="table" style="max-width: 100%;max-height:10%;overflow: auto">
        <table class="table  table-fixed table-hover table-striped" >
            <thead>
            <tr>
                <th nowrap="nowrap">SÉRIE</th>
                <th nowrap="nowrap">PLACA</th>
                <th nowrap="nowrap">RASTREADOR</th>
                <th nowrap="nowrap">COMUNICAÇÃO</th>
                <th nowrap="nowrap">TECLADO</th>
                <th nowrap="nowrap">TIPO</th>
                <th nowrap="nowrap">BAÚ</th>
                <th nowrap="nowrap">TIPO</th>
                <th nowrap="nowrap">BOTÃO BAÚ</th>
                <th nowrap="nowrap">CARRETA</th>
                <th nowrap="nowrap">TIPO</th>
                <th nowrap="nowrap">PORTAS</th>
                <th nowrap="nowrap">ALARME 1</th>
                <th nowrap="nowrap">ATIVO</th>
                <th nowrap="nowrap">ALARME 2</th>
                <th nowrap="nowrap">ATIVO</th>
                <th nowrap="nowrap">ALARME 3</th>
                <th nowrap="nowrap">ATIVO</th>
                <th nowrap="nowrap">ALARME 4</th>
                <th nowrap="nowrap">ATIVO</th>
                <th nowrap="nowrap">BLOQUEADOR</th>
                <th nowrap="nowrap">TIPO</th>
                <th nowrap="nowrap">SIRENE</th>
                <th nowrap="nowrap">PISCA</th>
                <th nowrap="nowrap">BOTÃO PANICO</th>
                <th nowrap="nowrap">DESLOCAMENTO</th>
                <th nowrap="nowrap">TIPO</th>
                <th nowrap="nowrap">BATERIA</th>
                <th nowrap="nowrap">ALERTA AUDIVEL</th>
                <th nowrap="nowrap">TERMÔMETRO</th>
                <th nowrap="nowrap">TIPO</th>
                <th nowrap="nowrap">NOBREAK</th>
                <th nowrap="nowrap">TRAVA 5 RODA</th>
                <th nowrap="nowrap">TELEMETRIA</th>
                <th nowrap="nowrap">FUNÇÃO PROGRAMÁVEL</th>
                <th nowrap="nowrap">NOME</th>
                <th nowrap="nowrap">CADASTRO</th>
                <th nowrap="nowrap">ALTERAÇÃO</th>


            </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($log as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{$item->IdTerminal }}</td>
                    <td nowrap="nowrap">{{$item->Veiculo }}</td>
                    <td>{{$item->Rastreador}}</td>
                    <td nowrap="nowrap">
                        @if($item->TipoComunicacao ==2)
                            {{ 'GPRS - CELULAR' }}
                        @elseif($item->TipoComunicacao ==6)
                            {{ 'HIBRIDO - SATELITAL' }}
                        @endif

                    </td>
                    <td>
                        @if($item->Console ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Console ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td nowrap="nowrap">
                        @if($item->TipoConsole ==0)
                            {{ 'NÃO CONFIGURADO' }}
                        @elseif($item->TipoConsole ==1)
                            {{ 'ALFANÚMERICO' }}
                        @elseif($item->TipoConsole ==2)
                            {{ 'COMPACTO' }}
                        @elseif($item->TipoConsole ==3)
                            {{ 'ALFANÚMERICO MULTIMÍDIA' }}
                        @elseif($item->TipoConsole ==4)
                            {{ 'ALFANÚMERICO COMPACTO' }}
                        @endif

                    </td>
                    <td>
                        @if($item->Bau ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Bau ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->TravaBau ==1)
                            {{ 'SOLENÓIDE' }}
                        @elseif($item->TravaBau ==2)
                            {{ 'MOTORIZADA' }}
                        @else
                            {{''}}
                        @endif

                    </td>
                    <td>
                        @if($item->BotBau ==0)
                            {{ 'NÃO' }}
                        @elseif($item->BotBau ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->Carreta ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Carreta ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td nowrap="nowrap">
                        @if($item->CarretaId ==1)
                            {{ 'SEM IDENTIFICAÇÃO' }}
                        @elseif($item->CarretaId ==2)
                            {{ 'COM IDENTIFICAÇÃO' }}
                        @else
                            {{''}}
                        @endif

                    </td>
                    <td>
                        @if($item->Portas ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Portas ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td nowrap="nowrap">{{$item->StrSensor1}}</td>
                    <td>
                        @if($item->UsoSensor1 ==0)
                            {{ 'NÃO' }}
                        @elseif($item->UsoSensor1 ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td nowrap="nowrap">{{$item->StrSensor2}}</td>
                    <td>
                        @if($item->UsoSensor2 ==0)
                            {{ 'NÃO' }}
                        @elseif($item->UsoSensor2 ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td nowrap="nowrap">{{$item->StrSensor3}}</td>
                    <td>
                        @if($item->UsoSensor3 ==0)
                            {{ 'NÃO' }}
                        @elseif($item->UsoSensor3 ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td nowrap="nowrap">{{$item->StrSensor4}}</td>
                    <td>
                        @if($item->UsoSensor4 ==0)
                            {{ 'NÃO' }}
                        @elseif($item->UsoSensor4 ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->BloqComb ==0)
                            {{ 'NÃO' }}
                        @elseif($item->BloqComb ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->TipoBloqueador ==1)
                            {{ 'ELETRÔNICO'  }}
                        @elseif($item->TravaBau ==2)
                            {{ 'SOLENÓIDE' }}
                        @else
                            {{''}}
                        @endif

                    </td>
                    <td>
                        @if($item->Sirene ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Sirene ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->Pisca ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Pisca ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->BotPanico ==0)
                            {{ 'NÃO' }}
                        @elseif($item->BotPanico ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->Odometro ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Odometro ==1)
                            {{ 'SIM' }}
                        @endif

                    </td>
                    <td>
                        @if($item->TipoOdometro ==1)
                            {{ 'ELETRÔNICO' }}
                        @elseif($item->TipoOdometro ==1)
                            {{ 'MECÂNICO' }}
                        @else
                            {{''}}
                        @endif

                    </td>
                    <td>
                        @if($item->Bateria ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Bateria ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>
                    <td>
                        @if($item->AlertaAudivel ==0)
                            {{ 'NÃO' }}
                        @elseif($item->AlertaAudivel ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>
                    <td>
                        @if($item->Termometro ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Termometro ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>
                    <td nowrap="nowrap">
                        @if($item->TipoTermometro ==0)
                            {{ 'NÃO POSSUI' }}
                        @elseif($item->TipoTermometro ==1)
                            {{ 'SENSOR ÚNICO' }}
                        @elseif($item->TipoTermometro ==2)
                            {{ 'SENSOR MÚLTIPLO' }}
                        @endif

                    </td>
                    <td>
                        @if($item->Bateria ==0)
                            {{ 'NÃO' }}
                        @elseif($item->Bateria ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>
                    <td>
                        @if($item->TravaQRoda ==0)
                            {{ 'NÃO' }}
                        @elseif($item->TravaQRoda ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>
                    <td>
                        @if($item->UsaTelemetria ==0)
                            {{ 'NÃO' }}
                        @elseif($item->UsaTelemetria ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>

                    <td>
                        @if($item->UsaFuncaoProgramavel ==0)
                            {{ 'NÃO' }}
                        @elseif($item->UsaFuncaoProgramavel ==1)
                            {{ 'SIM' }}

                        @endif

                    </td>
                    <td nowrap="nowrap">{{$item->Nome}}</td>
                    <td nowrap="nowrap">{{date( 'd/m/Y H:i:s' , strtotime($item->DataCadastro))}}</td>
                    <td nowrap="nowrap">{{date( 'd/m/Y H:i:s' , strtotime($item->DataAlteracao))}}</td>


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection