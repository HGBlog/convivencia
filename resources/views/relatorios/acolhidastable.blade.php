<table class="table table-responsive" id="acolhidas-table">
    <thead>
        <th>Conv</th>
        <th>Nome</th>
        <th>Acolhimento Extra</th>
        <th>Translado</th>
        <th>Local Chegada</th>
        <th>Data Chegada</th>
        <th>Hora Chegada</th>
        <th>Número do vôo</th>
        <th>Local Saída</th>
        <th>Data de Saída</th>
        <th>Hora saída</th>
        <th>Número do vôo</th>
        <th>Observações</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>
    @foreach($acolhidas as $acolhida)
        <tr>
            <td>{!! $acolhida->convivencia_id !!}</td>
            <td>{!! $membro->where('id', $acolhida->membro_id)->pluck('no_usuario')->first() !!}</td>
            <td>{!! $acolhida_extra->where('id', $acolhida->acolhida_extra_id)->pluck('no_acolhida_extra')->first() !!}</td>
            <td>{!! $tipo_translado->where('id', $acolhida->tipo_translado_id)->pluck('no_translado')->first() !!}</td>
            <td>{!! $acolhida->no_local_chegada !!}</td>
            <td>{!! Carbon\Carbon::parse($acolhida->dt_chegada)->format('d/m/Y') !!}</td>
            <td>{!! $acolhida->nu_hora_chegada !!}</td>
            <td>{!! $acolhida->nu_voo_chegada !!}</td>
            <td>{!! $acolhida->no_local_saida !!}</td>
            <td>{!! Carbon\Carbon::parse($acolhida->dt_saida)->format('d/m/Y') !!}</td>
            <td>{!! $acolhida->nu_hora_saida !!}</td>
            <td>{!! $acolhida->nu_voo_saida !!}</td>
            <td>{!! $acolhida->no_observacoes !!}</td>
            <td>
            
                {!! Form::open(['route' => ['acolhidas.destroy', $acolhida->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!--<a href="{!! route('acolhidas.show', [$acolhida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="{!! route('acolhidas.edit', [$acolhida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>