
<?php $__currentLoopData = $convivencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $convivencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<?php if(isset($convivencia->is_ativo)): ?>
	<div class="form-group col-sm-5">
	    <?php echo Form::label('convivencia_id', 'Convivência'); ?>

	    <?php echo Form::select('convivencia_id', $convivencias->pluck('no_nome', 'id'), null, ['id' => 'convivencia_id', 'class' => 'form-control', 'dropdown-menu', 'required']); ?>

	</div>
<!-- Submit Field -->
	<div class="form-group col-sm-12">
    	<?php echo Form::submit('Gerar Relatório de Inscrições' , ['class' => 'btn btn-primary']); ?>

    	<!-- <a href="<?php echo route('membros.index'); ?>" class="btn btn-default">Voltar para lista de Membros</a> -->
	</div>
	<?php break; ?>
	<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(empty($convivencia->is_ativo)): ?>
   	Não existe Convivência com inscrição aberta.
   	<div class="form-group col-sm-12">
	   	<a href="<?php echo route('membros.index'); ?>" class="btn btn-primary pull-left" style="margin-top: 25px">Voltar para lista de Membros</a>
	</div>
<?php endif; ?>