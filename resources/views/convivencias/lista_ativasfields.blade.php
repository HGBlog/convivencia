
@foreach($convivencias as $convivencia)

	@isset ($convivencia->is_ativo)
	<div class="form-group col-sm-5">
	    {!! Form::label('convivencia_id', 'Convivência') !!}
	    {!! Form::select('convivencia_id', $convivencias->pluck('no_nome', 'id'), null, ['id' => 'convivencia_id', 'class' => 'form-control', 'dropdown-menu', 'required'])!!}
	</div>
<!-- Submit Field -->
	<div class="form-group col-sm-12">
    	{!! Form::submit('Inscrever Equipe' , ['class' => 'btn btn-primary']) !!}
    	<a href="{!! route('membros.index') !!}" class="btn btn-default">Voltar para lista de Pessoas</a>
	</div>
	@break
	@endisset
@endforeach

@empty ($convivencia->is_ativo)
   	Não existe Convivência com o período de inscrições abertas.
   	<div class="form-group col-sm-12">
	   	<a href="{!! route('membros.index') !!}" class="btn btn-primary pull-left" style="margin-top: 25px">Voltar para lista de Pessoas</a>
	</div>
@endempty


