<!-- No Acolhida Extra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_acolhida_extra', 'No Acolhida Extra:') !!}
    {!! Form::text('no_acolhida_extra', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('acolhidaExtras.index') !!}" class="btn btn-default">Cancel</a>
</div>
