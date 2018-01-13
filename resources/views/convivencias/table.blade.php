<table class="table table-responsive" id="convivencias-table">
    <thead>
        <th>Habilitada</th>
        <th>Nome</th>
        <th>Local</th>
        <th>Telefone</th>
        <th>Data Início</th>
        <th>Data Término</th>
        <th>Início Inscrição</th>
        <th>Término Inscrição</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($convivencias as $convivencia)
        <tr>
            <td>{!! $convivencia->is_ativo !!}</td>
            <td>{!! $convivencia->no_nome !!}</td>
            <td>{!! $convivencia->no_local !!}</td>
            <td>{!! $convivencia->nu_telefone !!}</td>
            <td>{!! Carbon\Carbon::parse($convivencia->dt_inicio)->format('d/m/Y') !!}</td>
            <td>{!! Carbon\Carbon::parse($convivencia->dt_fim)->format('d/m/Y') !!}</td>
            <td>{!! Carbon\Carbon::parse($convivencia->dt_inicio_inscricao)->format('d/m/Y') !!}</td>
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
