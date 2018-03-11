<table class="table table-responsive" id="usuarios-table">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Macro-região</th>
        <th colspan="3">Ação</th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->name !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>{!! $macroregiao->where('id', $usuario->mregiao_id)->pluck('no_macro_regiao')->first() !!}</td>
            <td>
                {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit">Editar</i></a>
                    <!--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este usuario?')"]) !!} -->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
