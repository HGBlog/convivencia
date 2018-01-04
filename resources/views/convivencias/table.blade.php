<table class="table table-responsive" id="convivencias-table">
    <thead>
        <th>Is Ativo</th>
        <th>No Nome</th>
        <th>No Local</th>
        <th>Nu Telefone</th>
        <th>No Observacoes</th>
        <th>Dt Inicio</th>
        <th>Dt Fim</th>
        <th>Dt Inicio Inscricao</th>
        <th>Dt Fim Inscricao</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($convivencias as $convivencia)
        <tr>
            <td>{!! $convivencia->is_ativo !!}</td>
            <td>{!! $convivencia->no_nome !!}</td>
            <td>{!! $convivencia->no_local !!}</td>
            <td>{!! $convivencia->nu_telefone !!}</td>
            <td>{!! $convivencia->no_observacoes !!}</td>
            <td>{!! $convivencia->dt_inicio !!}</td>
            <td>{!! $convivencia->dt_fim !!}</td>
            <td>{!! $convivencia->dt_inicio_inscricao !!}</td>
            <td>{!! $convivencia->dt_fim_inscricao !!}</td>
            <td>
                {!! Form::open(['route' => ['convivencias.destroy', $convivencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('convivencias.show', [$convivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('convivencias.edit', [$convivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
