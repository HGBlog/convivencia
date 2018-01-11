<table class="table table-responsive" id="membros-table">
    <thead>
        <th>Nome</th>
        <th>Pais</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Cod. Pais</th>
        <th>Telefone</th>
        <th>Diocese</th>
        <th>Cidade</th>
        <!--
        <th>Paroquia</th>
        <th>Comunidade</th>
        <th>Início Caminho</th>
        -->
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($membros as $membro)
        <tr>
            <td>{!! $membro->no_usuario !!}</td>
            <td>{!! $membro->no_pais !!}</td>
            <td>{!! $membro->no_email !!}</td>
            <td>{!! $membro->no_sexo !!}</td>
            <td>{!! $membro->co_telefone_pais !!}</td>
            <td>{!! $membro->nu_telefone !!}</td>
            <td>{!! $membro->no_diocese !!}</td>
            <td>{!! $membro->no_cidade !!}</td>
            <!--
            <td>{!! $membro->no_paroquia !!}</td>
            <td>{!! $membro->nu_comunidade !!}</td>
            <td>{!! $membro->nu_ano_inicio_caminho !!}</td>
            -->
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
