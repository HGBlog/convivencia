<table class="table table-responsive" id="tipoQuartos-table">
    <thead>
        <th>Tipo de Quarto</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoQuartos as $tipoQuarto)
        <tr>
            <td>{!! $tipoQuarto->no_quarto !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoQuartos.destroy', $tipoQuarto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoQuartos.edit', [$tipoQuarto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Você tem certeza que deseja excluir?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
