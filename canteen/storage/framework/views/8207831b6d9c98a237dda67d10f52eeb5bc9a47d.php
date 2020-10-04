<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#74a6f7";>
<a class="navbar-brand" href="<?php echo e(route('staff.dashboard')); ?>">CanteenStaff</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse font-weight-bold" id="navbarCollapse">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
    <?php if(!Auth::guard('staff')->guest()): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/staff/orders')); ?>">Orders</a>
    </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/')); ?>">Customer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/manager')); ?>">Manager</a>
    </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <?php if(Auth::guard('staff')->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('staff.login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
            <?php if(Route::has('staff.register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('staff.register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
            <?php endif; ?>
        <?php else: ?>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::guard('staff')->user()->name); ?> <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('staff.logout')); ?>"
                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('staff.logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</div>
</nav><?php /**PATH C:\xampp\htdocs\canteen\resources\views\staff\layouts\navbar.blade.php ENDPATH**/ ?>