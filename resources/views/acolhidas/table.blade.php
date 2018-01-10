<table class="table table-responsive" id="acolhidas-table">
    <thead>
        <th>No Casa Convivencia</th>
        <th>Dt Chegada</th>
        <th>Nu Hora Chegada</th>
        <th>Nu Voo Chegada</th>
        <th>Dt Saida</th>
        <th>Nu Hora Saida</th>
        <th>Nu Voo Saida</th>
        <th>No Observacoes</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($acolhidas as $acolhida)
        <tr>
            <td>{!! $acolhida->no_casa_convivencia !!}</td>
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
