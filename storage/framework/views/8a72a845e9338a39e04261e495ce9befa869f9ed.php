<?php if(Auth::check()): ?>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <?php echo $__env->make('backpack::inc.sidebar_user_panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="<?php echo e(route ('home')); ?>"><i class="fa fa-home"></i> <span><?php echo e(trans('Voltar para Home')); ?></span></a></li>
          <!-- Users, Roles Permissions -->
            <li class="treeview">
              <a href="#"><i class="fa fa-group"></i> <span>ADMINISTRAÇÃO</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/user')); ?>"><i class="fa fa-user"></i> <span>Usuários</span></a></li>
                <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/role')); ?>"><i class="fa fa-group"></i> <span>Roles</span></a></li>
                <li><a href="<?php echo e(url(config('backpack.base.route_prefix', 'admin') . '/permission')); ?>"><i class="fa fa-key"></i> <span>Permissões</span></a></li>
              </ul>
            </li>

          <!-- ======================================= -->
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
<?php endif; ?>
