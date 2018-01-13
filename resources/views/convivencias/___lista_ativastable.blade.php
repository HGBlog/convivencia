<table class="table table-responsive" id="convivencias_ativas-table">
    <thead>
        <th>Is Ativo</th>
        <th>Convivência</th>

        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($convivencias as $convivencia)
        <tr>
            
            <td>{!! $convivencia->is_ativo !!}</td>
                <td>

                    {!! Form::label('convivencia_id', "Convivência") !!}
                    {!! Form::select('convivencia_id', $convivencia, $convivencia->pluck('id'),['id' => 'convivencia_id', 'class' => 'form-control', 'dropdown-menu']) !!}

                </td>
            <td>
                {!! Form::open(['route' => ['convivencias.destroy', $convivencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('convivencias.show', [$convivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('convivencias.edit', [$convivencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>