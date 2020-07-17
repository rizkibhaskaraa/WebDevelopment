<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

   <!-- Scripts -->
   <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(url('frontend/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="<?php echo e(url('frontend/css/business-frontpage.css')); ?>" rel="stylesheet">

  <!-- Laravel template css -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

</head>

<body>

    <div id="app">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="font-family:'Lucida Sans'; "> 
            <img class="mr-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" style="width:50px; height:50px;" alt="logo">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              
              <!-- Authentication Links -->
              <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    
     

        <main class="">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <footer class="py-3 bg-dark mt-5 fixed-bottom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Socialize Bike 2020</p>
      </div>
      <!-- /.container -->
    </footer>
      <!-- Bootstrap core JavaScript -->
            <script src="<?php echo e(url('frontend/vendor/jquery/jquery.min.js')); ?>"></script>
            <script src="<?php echo e(url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>



</html>
<?php /**PATH C:\xampp\htdocs\WebDevelopment\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>