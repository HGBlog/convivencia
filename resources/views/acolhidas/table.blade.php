<table class="table table-responsive" id="acolhidas-table">
    <thead>
        <th>Data Chegada</th>
        <th>Hora Chegada</th>
        <th>Número do vôo</th>
        <th>Data de Saída</th>
        <th>Hora saída</th>
        <th>Número do vôo</th>
        <th>Observações</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($acolhidas as $acolhida)
        <tr>
            <td>{!! $acolhida->dt_chegada !!}</td>
            <td>{!! $acolhida->nu_hora_chegada !!}</td>
            <td>{!! $acolhida->nu_voo_chegada !!}</td>
            <td>{!! $acolhida->dt_saida !!}</td>
            <td>{!! $acolhida->nu_hora_saida !!}</td>
            <td>{!! $acolhida->nu_voo_saida !!}</td>
            <td>{!! $acolhida->no_observacoes !!}</td>
            <td>
            
                {!! Form::open(['route' => ['acolhidas.destroy', $acolhida->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('acolhidas.show', [$acolhida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('acolhidas.edit', [$acolhida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
