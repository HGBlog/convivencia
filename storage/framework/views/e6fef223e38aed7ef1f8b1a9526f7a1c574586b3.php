<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Caminho Neocatecumenal no Brasil</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.1/css/bootstrap-toggle.min.css">

    <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css"
          rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/jQuery.easyTabs.css')); ?>">
    <script  src="<?php echo e(URL::to('js/jQuery.easyTabs.js')); ?>"></script>      


    <?php echo $__env->yieldContent('css'); ?>

    <style type="text/css">
        .sidebar-nav li.active > a,
        .sidebar-nav li > a:focus {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .header {
            width: 100%;
            background: #e7e7e7;
            color: #fff;
            height: 50px;

        }
    </style>
</head>
<body id="app-layout">

<?php if(Auth::guest()): ?>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Sistema de Convivências
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo e(url('/login')); ?>">Entrar</a></li>
                    <li><a href="<?php echo e(url('/register')); ?>">Registrar (Primeiro acesso)</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php else: ?>
    <div id="wrapper" class="">
    <!-- Sidebar -->
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <header class="header">
        <a href="#menu-toggle"
           style="margin-top: 8px;margin-left: 5px;background-color: #E7E7E7;border-color: #E7E7E7"
           class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
        </a>

        <span class="pull-right" style="margin-right: 10px;margin-top: 15px">
            <a href="<?php echo e(url('/logout')); ?>"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair
            </a>
            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        </span>
    </header>
    </div>
<?php endif; ?>

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <?php if(config('infyom.laravel_generator.add_on.menu.enabled') and !Auth::guest()): ?>
                <div class="col-md-10 col-md-offset-2">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            <?php else: ?>
                <div class="col-md-12">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->



<!-- Adicionado my-checkbox - ToogleSwitch do Bootstrap  -->

<script>

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $("[name='my-checkbox']").bootstrapSwitch();
</script>


<script type="text/javascript">
    //Scripy das abas para a blade
    $(".simple-tab").tabs(
        {
          type: "click", // onmouseover or 'click'
          // animation speed in milliseconds
          speed: 800, 

          // "toogle", "slide", "fade"
          animation: "slide"

        }

    );
    $(".nexttab").click(function() {
        var active = $(".simple-tab").tabs( "option", "active" );
        var proxima = active +1;
        $(".simple-tab").tabs( "option", "active", proxima );

    });
</script> 


<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>