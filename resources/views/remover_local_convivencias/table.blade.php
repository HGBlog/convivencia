<table class="table table-responsive" id="removerLocalConvivencias-table">
    <thead>
        <tr>
            <th>No Local</th>
        <th>Nu Telefone</th>
        <th>No Cidade</th>
        <th>No Endereco</th>
        <th>No Observacoes</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($removerLocalConvivencias as $removerLocalConvivencia)
        <tr>
            <td>{!! $removerLocalConvivencia->no_local !!}</td>
            <td>{!! $removerLocalConvivencia->nu_telefone !!}</td>
            <td>{!! $removerLocalConvivencia->no_cidade !!}</td>
            <td>{!! $removerLocalConvivencia->no_endereco !!}</td>
            <td>{!! $removerLocalConvivencia->no_observacoes !!}</td>
            <td>
                {!! Form::open(['route' => ['removerLocalConvivencias.destroy', $removerLocalConvivencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('removerLocalConvivencias.show', [$removerLocalConvivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('removerLocalConvivencias.edit', [$removerLocalConvivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>