<table class="table table-responsive" id="localConvivencias-table">
    <thead>
        <th>No Local</th>
        <th>Nu Telefone</th>
        <th>No Cidade</th>
        <th>No Endereco</th>
        <th>No Observacoes</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($localConvivencias as $localConvivencia)
        <tr>
            <td>{!! $localConvivencia->no_local !!}</td>
            <td>{!! $localConvivencia->nu_telefone !!}</td>
            <td>{!! $localConvivencia->no_cidade !!}</td>
            <td>{!! $localConvivencia->no_endereco !!}</td>
            <td>{!! $localConvivencia->no_observacoes !!}</td>
            <td>
                {!! Form::open(['route' => ['localConvivencias.destroy', $localConvivencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('localConvivencias.edit', [$localConvivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
