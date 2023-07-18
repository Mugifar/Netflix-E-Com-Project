<?php $__env->startSection('main-content'); ?>
<div class="container">
    <div class="row" style="padding: 80px;">
        <div class="col-sm-6">
            <video class="detail-img" controls style="height: 400px;">
                <source  src="<?php echo e(asset('uploads/storevideos/'.$movies->movie_clip)); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="detail  col-sm-8"><br>
            <h2>Movie Name: <?php echo e($movies->name); ?></h2><br>
            <h2>Subscription: <?php echo e($movies->genres); ?></h2><br>
            <h3>Category: <?php echo e($movies->category); ?></h3><br>
            <h4>Cast: <?php echo e($movies->cast); ?></h4><br>
            <h4>Language: <?php echo e($movies->language); ?></h4><br>
            <h4>Year: <?php echo e($movies->year); ?></h4><br>
            <h4>Runtime: <?php echo e($movies->runtime); ?></h4><br>
            <h4>Description: <?php echo e($movies->discription); ?></h4><br>
        </div>
        <a class="btn btn-danger col-md-5" href="/home">Go Back</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/home/detail.blade.php ENDPATH**/ ?>