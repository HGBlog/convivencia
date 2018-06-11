<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel" style="white-space: normal;">
            <div class="pull-left image">
                <img src="http://www.cn.org.br/portal/wp-content/uploads/2014/02/cropped-Virgem2.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php if(Auth::guest()): ?>
                <p>CN</p>
                <?php else: ?>
                    <p><?php echo e(Auth::user()->name); ?></p>
                <?php endif; ?>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                <a href="<?php echo url('/logout'); ?>" class="fa fa-sign-out"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sair
                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form> -->

        <!-- Sidebar Menu -->
	<ul class="sidebar-menu MenuProvisorio" data-widget="tree">
            <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
