<table class="table table-responsive" id="perfilUsuarios-table">
    <thead>
        <th>No Usuario</th>
        <th>No Pais</th>
        <th>No Email</th>
        <th>No Sexo</th>
        <th>Co Telefone Pais</th>
        <th>Nu Telefone</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($perfilUsuarios as $perfilUsuario)
        <tr>
            <td>{!! $perfilUsuario->no_usuario !!}</td>
            <td>{!! $perfilUsuario->no_pais !!}</td>
            <td>{!! $perfilUsuario->no_email !!}</td>
            <td>{!! $perfilUsuario->no_sexo !!}</td>
            <td>{!! $perfilUsuario->co_telefone_pais !!}</td>
            <td>{!! $perfilUsuario->nu_telefone !!}</td>
            <td>
                {!! Form::open(['route' => ['perfilUsuarios.destroy', $perfilUsuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('perfilUsuarios.show', [$perfilUsuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('perfilUsuarios.edit', [$perfilUsuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
