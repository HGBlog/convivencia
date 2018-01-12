<table class="table table-responsive" id="tipoEquipes-table">
    <thead>
        <th>No Equipe</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoEquipes as $tipoEquipe)
        <tr>
            <td>{!! $tipoEquipe->no_equipe !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoEquipes.destroy', $tipoEquipe->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoEquipes.show', [$tipoEquipe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoEquipes.edit', [$tipoEquipe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
