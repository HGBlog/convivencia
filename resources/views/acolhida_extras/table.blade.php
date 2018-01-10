<table class="table table-responsive" id="acolhidaExtras-table">
    <thead>
        <th>Nome Acolhida Extra</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($acolhidaExtras as $acolhidaExtra)
        <tr>
            <td>{!! $acolhidaExtra->no_acolhida_extra !!}</td>
            <td>
                {!! Form::open(['route' => ['acolhidaExtras.destroy', $acolhidaExtra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('acolhidaExtras.show', [$acolhidaExtra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('acolhidaExtras.edit', [$acolhidaExtra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
