<?php $__env->startSection('main-content'); ?>
<div class="table-responsive" style="margin-top: 100px;margin-left:260px;">
    <table class="table align-items-center table-flush table-borderless">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Password</th>
            </tr>
        </thead>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/admin/profile.blade.php ENDPATH**/ ?>