<table class="table table-responsive" id="equipes-table">
    <thead>
        <th>No Equipe</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($equipes as $equipe)
        <tr>
            <td>{!! $equipe->no_equipe !!}</td>
            <td>
                {!! Form::open(['route' => ['equipes.destroy', $equipe->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('equipes.show', [$equipe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('equipes.edit', [$equipe->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
