@extends('layouts.app')

@section('content')
    <script>
        setTimeout(function(){
            location.reload();
        },105000); // 5000 milliseconds means 5 seconds.
    </script>
    <div class="container">
        <form class="navbar-form navbar-left" role="search" action="{!! url('/telecomandos') !!}" method="post" style="margin-left: 10%;margin-bottom: 1%;">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Pesquisar: Data Inicial: </label>
                <input type="Date" name="dataini">

                <label>Data Final: </label>
                <input type="Date" name="datafim">
            </div>
            <div class="form-group">
                <select name="tipofiltro">
                    <option value="0">Série</option>
                    <option value="1">Placa</option>
                    <option value="2">Status</option>

                </select>

                <input type="text" name="filtro">
                <button class="btn-dark" >Pesquisar</button>
            </div>
        </form>
    </div>
    <br>
    <div class="table" style="max-width: 100%;max-height:10%;overflow: auto">
        <table class="table  table-fixed table-hover table-striped" >
            <thead>
            <tr>
                <th nowrap="nowrap">SÉRIE</th>
                <th nowrap="nowrap">PLACA</th>
                <th nowrap="nowrap">DATA</th>
                <th nowrap="nowrap">STATUS</th>
                <th nowrap="nowrap">TABELA</th>
                <th nowrap="nowrap">STATUS</th>
                <th nowrap="nowrap">COMUNICAÇÃO</th>


            </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($log as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td nowrap="nowrap">{{$item->IDTerminal }}</td>
                    <td nowrap="nowrap">{{$item->Veiculo }}</td>
                    <td nowrap="nowrap">{{date( 'd/m/Y H:i:s' , strtotime($item->DataHoraEm))}}</td>
                    <td nowrap="nowrap">
                        @if($item->StatusEnvio ==0)
                            {{'Enviado '}}
                            @if($item->DiagnosticoOpRemota==100)
                                {{''}}
                            @elseif($item->DiagnosticoOpRemota==0)
                                {{'e processado com sucesso pelo veículo.'}}
                            @elseif($item->DiagnosticoOpRemota==255)
                                {{'e aguardando processamento do veículo.'}}
                            @else
                                {{'e processado com erros pelo veículo.'}}
                            @endif
                        @elseif($item->StatusEnvio ==1)
                            {{'Tentativas de envio esgotadas'}}
                        @elseif($item->StatusEnvio ==16)
                            {{'Aguardando conexão com veículo...'}}
                        @elseif($item->StatusEnvio ==132)
                            {{'Telecomando descartado           '}}
                        @elseif($item->StatusEnvio ==138)
                            {{'Erro: Ver Nº de Série ou Telefone'}}
                        @elseif($item->StatusEnvio ==200)
                            {{'Aguardando um teleevento...      '}}
                        @elseif($item->StatusEnvio ==254)
                            {{'Cancelado pelo operador          '}}
                        @elseif($item->StatusEnvio ==255)
                            {{'Impossível cancelar              '}}
                        @elseif($item->StatusEnvio ==257)
                            {{ 'Veículo desconhecido pela base   '}}
                        @elseif($item->StatusEnvio ==258)
                            {{'Uso não autorizado do veículo    '}}
                        @elseif($item->StatusEnvio ==259)
                            {{'Telecomando desconhecido         '}}
                        @else
                            {{'Erro desconhecido: '}}{{$item->StatusEnvio}}
                        @endif
                    </td>
                    <td nowrap="nowrap">
                            {{$item->Descricao}}
                    </td>
                    <td nowrap="nowrap">
                        @foreach($msg as $mensagem)
                            @if($mensagem->CodMsg==$item->CodMsg)
                                {{$mensagem->Descricao}}

                            @endif
                        @endforeach
                    </td>
                    <td nowrap="nowrap">
                        @if($item->CallProgress==2)
                            {{'Celular'}}
                        @elseif($item->CallProgress==3)
                            {{'Satelital'}}
                        @endif
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection