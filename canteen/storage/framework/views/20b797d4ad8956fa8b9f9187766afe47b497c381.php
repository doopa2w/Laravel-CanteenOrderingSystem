<footer class="page-footer font-small pt-4" style="background: #2d3246; color: white; margin-top: 20px;">
    <div class="container-fluid text-center text-md-left">
        <div class = "row">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class ="text-uppercase">Canteen</h5>
                <p>We hope you enjoyed our services as we continue to bring more updates to make your experience better than ever before!</p>
                <h5 class="text-uppercase">Contact us at 1-300-888-999!</h5>
            </div>
            <!-- grid column-->
            <hr class ="clearfix w-100 d-md-none pb-3">
            <div class ="col-md-3 mb-md-0 mb-3">
                <h5 class ="text-uppercase">Navigation</h5>
                <ul class = "list-unstyled">
                    <li>
                        <a href = "<?php echo e(url('/foods')); ?>" style="color: white;">Foods</a>
                    </li>
                    <li>
                        <a href = "<?php echo e(url('/orders')); ?>" style="color: white;">Orders</a>
                    </li>   
                    <li>
                        <a href = "<?php echo e(url('/posts')); ?>" style="color: white;">News</a>
                    </li>
                    <a>
                        <a href = "<?php echo e(url('/about')); ?>" style="color: white;">About</a>
                    </a>               
                </ul>
            </div>
            <div class ="col-md-3 mb-md-0 mb-3">
                <h5 class ="text-uppercase">Switch to</h5>
                <ul class = "list-unstyled">
                    <li>
                        <a href = "<?php echo e(url('/manager')); ?>" style="color: white;">Manager</a>
                    </li>
                    <li>
                        <a href = "<?php echo e(url('/staff')); ?>" style="color: white;">Staff</a>
                    </li>           
                </ul>               
            </div>
        </div>
    </div>
    <div class ="footer-copyright text-center py-3">
        Copyright &copy; Canteen 2019
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\canteen\resources\views/layouts/footer.blade.php ENDPATH**/ ?>