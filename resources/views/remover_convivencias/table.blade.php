<table class="table table-responsive" id="removerConvivencias-table">
    <thead>
        <tr>
            <th>Is Ativo</th>
        <th>Local Convivencia Id</th>
        <th>No Nome</th>
        <th>No Observacoes</th>
        <th>Dt Inicio</th>
        <th>Dt Fim</th>
        <th>Dt Inicio Inscricao</th>
        <th>Dt Fim Inscricao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($removerConvivencias as $removerConvivencia)
        <tr>
            <td>{!! $removerConvivencia->is_ativo !!}</td>
            <td>{!! $removerConvivencia->local_convivencia_id !!}</td>
            <td>{!! $removerConvivencia->no_nome !!}</td>
            <td>{!! $removerConvivencia->no_observacoes !!}</td>
            <td>{!! $removerConvivencia->dt_inicio !!}</td>
            <td>{!! $removerConvivencia->dt_fim !!}</td>
            <td>{!! $removerConvivencia->dt_inicio_inscricao !!}</td>
            <td>{!! $removerConvivencia->dt_fim_inscricao !!}</td>
            <td>
                {!! Form::open(['route' => ['removerConvivencias.destroy', $removerConvivencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('removerConvivencias.show', [$removerConvivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('removerConvivencias.edit', [$removerConvivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>