<table class="table table-responsive" id="convivencias-table">
    <thead>
        <th>Habilitada</th>
        <th>Nome</th>
        <th>Local</th>
        <th>Início</th>
        <th>Fim</th>
        <th>Fim Inscrições</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($convivencias as $convivencia)
        <tr>
            <td>

                    @if (!$convivencia->is_ativo)
                        <font color="red"><b>NÃO</b></font>
                    @else
                        <font color="green"><b>SIM</b></font>
                    @endif



</td>
            <td>{!! $convivencia->no_nome !!}</td>
            <td>{!! $local->where('id', $convivencia->local_convivencia_id)->pluck('no_local')->first() !!}</td>
            <td>{!! Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y') !!}</td>
            <td>{!! Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y') !!}</td>
            <td>{!! Carbon\Carbon::parse($convivencia->dt_fim_inscricao)->format('d/m/Y') !!}</td>
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
