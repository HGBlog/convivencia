<table class="table table-responsive" id="etapas-table">
    <thead>
        <th>No Etapa</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($etapas as $etapa)
        <tr>
            <td>{!! $etapa->no_etapa !!}</td>
            <td>
                {!! Form::open(['route' => ['etapas.destroy', $etapa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('etapas.edit', [$etapa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
