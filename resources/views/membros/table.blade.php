
<table class="table table-responsive" id="membros-table">
    <thead>
        <th></th>
        <th>Nomes</th>
        <th>Equipe</th>
        <th colspan="3">Ações</th>
    </thead>
    <tbody>

    @foreach($membros as $membro)
            <tr>
            <td>{!! (($membros->currentPage() - 1 ) * $membros->perPage() ) + $loop->iteration !!}</td>
        @if(!empty($membro->no_conjuge))
            <td>{!! $membro->no_usuario !!} e {!! $membro->no_conjuge !!}</td>
            <td>{!! $equipe->where('id', $membro->equipe_id)->pluck('no_equipe')->first() !!}</td>
            <td>
                {!! Form::open(['route' => ['membros.destroy', $membro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!--
                    <a href="{!! route('membros.show', [$membro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    -->
                    <a href="{!! route('membros.edit', [$membro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este membro da sua Equipe?!')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        @else
            <td>{!! $membro->no_usuario !!}</td>
            <td>{!! $equipe->where('id', $membro->equipe_id)->pluck('no_equipe')->first() !!}</td>
            <td>
                {!! Form::open(['route' => ['membros.destroy', $membro->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!--
                    <a href="{!! route('membros.show', [$membro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    -->
                    <a href="{!! route('membros.edit', [$membro->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Excluir', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir este membro da sua Equipe?!')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        @endif                
        </tr>
    @endforeach
    </tbody>
</table>
