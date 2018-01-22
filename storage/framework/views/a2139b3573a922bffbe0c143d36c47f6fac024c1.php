<?php $__env->startSection('content'); ?>
 	<section class="content-header">
        <h1 class="pull-left">Membros da Equipe - <font color="red"><b><?php echo e($qtde_membros); ?></b> cadastrados</font></h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo route('membros.create'); ?>">Adicionar Novo Membro</a>
        </h1>
    </section>        
<div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
                <ul class="pagination">
        	<div align="center">Página <?php echo e($membros->currentPage()); ?> de <?php echo e($membros->lastPage()); ?></div>
		    <!-- Previous Page Link -->

		    <?php if($membros->onFirstPage()): ?>
		        <li class="disabled"><span>&laquo;</span></li>
		    <?php else: ?>
		        <li><a href="<?php echo e($membros->previousPageUrl()); ?>" rel="prev">&laquo;</a></li>
		    <?php endif; ?>
		    	
		    <!-- Pagination Elements -->
		    <?php $__currentLoopData = $membros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <!-- "Three Dots" Separator -->
		        <?php if(is_string($membro)): ?>
		            <li class="disabled"><span><?php echo e($membro); ?></span></li>
		        <?php endif; ?>

		        <!-- Array Of Links -->
		        <?php if(is_array($membro)): ?>
		            <?php $__currentLoopData = $membro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <?php if($page == $paginator->currentPage()): ?>
		                    <li class="active"><span><?php echo e($page); ?></span></li>
		                <?php else: ?>
		                    <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
		                <?php endif; ?>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        <?php endif; ?>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		    <!-- Next Page Link -->
		    <?php if($membros->hasMorePages()): ?>
		        <li><a href="<?php echo e($membros->nextPageUrl()); ?>" rel="next">&raquo;</a></li>
		    <?php else: ?>
		        <li class="disabled"><span>&raquo;</span></li>
		    <?php endif; ?>

		</ul>
        <div class="box box-primary">
            <div class="box-body">
                    <?php echo $__env->make('membros.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
         
<?php $__env->stopSection(); ?>






    
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>