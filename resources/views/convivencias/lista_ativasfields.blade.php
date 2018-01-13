
@foreach($convivencias as $convivencia)

	@isset ($convivencia->is_ativo)
	<div class="form-group col-sm-6">
	    {!! Form::label('convivencia_id', 'Convivência') !!}
	    {!! Form::select('convivencia_id', $convivencias->pluck('no_nome', 'id'), ['id' => 'convivencia_id', 'class' => 'form-control', 'dropdown-menu'])!!}
	</div>
<!-- Submit Field -->
	<div class="form-group col-sm-12">
    	{!! Form::submit('Inscrever Equipe' , ['class' => 'btn btn-primary']) !!}
    	<a href="{!! route('membros.index') !!}" class="btn btn-default">Voltar para lista de Membros</a>
	</div>
	@break
	@endisset
@endforeach

@empty ($convivencia->is_ativo)
   	Não existe Convivência com inscrição aberta.
   	<div class="form-group col-sm-12">
	   	<a href="{!! route('membros.index') !!}" class="btn btn-primary pull-left" style="margin-top: 25px">Voltar para lista de Membros</a>
	</div>
@endempty



