<div id="sidebar-wrapper" class="col-md-3" style="padding-left: 0;padding-right: 0">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Convivências
            </a>
        </li>
       <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </ul>
</div>
