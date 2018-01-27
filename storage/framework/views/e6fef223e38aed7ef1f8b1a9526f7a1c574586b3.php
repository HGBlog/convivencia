<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Convivências</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Easy Tabs - Tabs dos Forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/jQuery.easyTabs.css')); ?>">
    

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

   
    <!-- SmartWizard -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/smart_wizard.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/smart_wizard_theme_arrows.min.css')); ?>">

    <!-- Bootstrap Combobox-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/bootstrap-combobox.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/jquery-ui.combobox.css')); ?>">


    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="skin-blue sidebar-mini">
<?php if(!Auth::guest()): ?>
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>Convivências</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://www.cn.org.br/portal/wp-content/uploads/2014/02/cropped-Virgem2.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?php echo Auth::user()->name; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://paroquiadesantoandre.pt/img/grupos/caminho-neocatecumenal.png"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        <?php echo Auth::user()->name; ?>

                                        <small>Usuário desde <?php echo Auth::user()->created_at->format('M. Y'); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                      <div class="pull-left">
                                          <a href="/usuarios/<?php echo Auth::user()->id; ?>/perfil" class="btn btn-default btn-flat">Perfil</a>
                                      </div>
                                      <div class="pull-left">
                                          <a href="/changePassword" class="btn btn-default btn-flat">Senha</a>
                                      </div>
                                     <div class="pull-right">
                                        <a href="<?php echo url('/logout'); ?>" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>
                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="#">Caminho Neocatecumenal no Brasil</a>.</strong>
        </footer>

    </div>
<?php else: ?>
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
                <a class="navbar-brand" href="<?php echo url('/'); ?>">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo url('/home'); ?>">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="<?php echo url('/login'); ?>">Login</a></li>
                    <li><a href="<?php echo url('/register'); ?>">Registro (Primeiro Acesso)</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script  src="<?php echo e(URL::to('js/jQuery.easyTabs.js')); ?>"></script> 

    <!-- SmartWizard -->
    <script  src="<?php echo e(URL::to('js/jquery.smartWizard.min.js')); ?>"></script>

    <!-- Bootstrap Combobox -->
    <script  src="<?php echo e(URL::to('js/bootstrap-combobox.js')); ?>"></script>

    <script  src="<?php echo e(URL::to('js/jquery-ui.combobox.js')); ?>"></script>

    
    
    <!-- Tabs para os forms -->
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

    <!-- SmartWizard - Wizard em formulario -->
    <script type="text/javascript">
        $('#smartwizard').smartWizard(
    {
        // Initial selected step, 0 = first step 
      selected: 0,  

      // Automatically adjust content height
      autoAdjustHeight:true, 

      // Allows to cycle the navigation of steps
      cycleSteps: false, 

      // Enable the back button support
      backButtonSupport: true, 

      // Enable selection of the step based on url hash
      useURLhash: true, 

      // Show url hash based on step 
      showStepURLhash: true, 

      // Language variables
      lang: {  
          next: 'Avançar', 
          previous: 'Voltar'
      },

      // step bar options
      toolbarSettings: {
        toolbarPosition: 'bottom', // none, top, bottom, both
        toolbarButtonPosition: 'right', // left, right
        showNextButton: true, // show/hide a Next button
        showPreviousButton: true, // show/hide a Previous button
        toolbarExtraButtons: []
      }, 


      // anchor options
      anchorSettings: {
        anchorClickable: true, // Enable/Disable anchor navigation
        enableAllAnchors: true, // Activates all anchors clickable all times
        markDoneStep: true, // add done css
        markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
        removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
        enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
      },     

      // content url, Enables Ajax content loading. can set as data data-content-url on anchor
      contentURL: null, 

      // Array of disabled Steps
      disabledSteps: [],    

      // Highlight step with errors
      errorSteps: [],    

      // Hidden steps
      hiddenSteps: [], 

      // theme
      theme: 'arrows',

      // Effect on navigation, none/slide/fade
      transitionEffect: 'fade', 

      // transition speed in ms
      transitionSpeed: '400'
      
    });
    </script>    

    <script type="text/javascript">
      $('select').combobox();

    </script>

    <script type="text/javascript">
      $('.combobox').combobox({

      // Bootstrap version
      bsVersion: '3', 

      // default templates
      //menu: '<ul class="typeahead typeahead-long dropdown-menu"></ul>', 
      menu: '<ul class="form-control dropdown-menu"></ul>', 
      item: '<li><a href="#" class="form-control dropdown-item"></a></li>',

      // Custom function with one item argument that compares the item to the input.
      matcher: null,

      // Custom function that sorts a list items for display in the dropdown
      sorter: null,

      // Custom function for highlighting an item. 
      highlighter: null,

      // Custom function that returns markup for the combobox.
      template: null,

      // The desired id of the transformed combobox. 
      appendId: null
      
    })
    </script>



    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>