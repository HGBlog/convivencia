{!! Form::open(['route' => ['membros.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <!--
    <a href="{{ route('membros.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
-->
    <a href="{{ route('membros.edit_macroregiao', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"> Editar</i>
    </a>
    
</div>
{!! Form::close() !!}
