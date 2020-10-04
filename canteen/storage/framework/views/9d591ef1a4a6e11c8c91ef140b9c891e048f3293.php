<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#f4b153";>
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Canteen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse font-weight-bold" id="navbarCollapse">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/orders')); ?>">Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/foods')); ?>">Foods</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/posts')); ?>">News</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/staff')); ?>">Staff</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/manager')); ?>">Manager</a>
        </li>
        </ul>
    
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <?php if(Auth::guard('customer')->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('customer.login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('customer.register')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('customer.register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::guard('customer')->user()->name); ?> <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('customer.logout')); ?>"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('customer.logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    </nav>

    <?php /**PATH C:\xampp\htdocs\canteen\resources\views\customer\layouts\navbar.blade.php ENDPATH**/ ?>