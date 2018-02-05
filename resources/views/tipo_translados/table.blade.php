<table class="table table-responsive" id="tipoTranslados-table">
    <thead>
        <th>No Translado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoTranslados as $tipoTranslado)
        <tr>
            <td>{!! $tipoTranslado->no_translado !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoTranslados.destroy', $tipoTranslado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoTranslados.edit', [$tipoTranslado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
