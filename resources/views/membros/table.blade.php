<table class="table table-responsive" id="membros-table">
    <thead>
        <th>Nome</th>
        <th>Equipe</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th colspan="3">Ações</th>
    </thead>
    <tbody>
    @foreach($membros as $membro)
        <tr>
            <td>{!! $membro->no_usuario !!}</td>
            <td>{!! $equipe->where('id', $membro->equipe_id)->pluck('no_equipe')->first() !!}</td>
            <td>{!! $membro->nu_telefone !!}</td>
            <td>{!! $membro->no_cidade !!}</td>
            <td>
                {!! Form::open(['route' => ['membros.destroy', $membro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!--
                    <a href="{!! route('membros.show', [$membro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    -->
                    <a href="{!! route('membros.edit', [$membro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este membro da sua Equipe?!')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
