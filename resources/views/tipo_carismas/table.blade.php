<table class="table table-responsive" id="tipoCarismas-table">
    <thead>
        <th>No Carisma</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoCarismas as $tipoCarisma)
        <tr>
            <td>{!! $tipoCarisma->no_carisma !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoCarismas.destroy', $tipoCarisma->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoCarismas.show', [$tipoCarisma->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoCarismas.edit', [$tipoCarisma->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
