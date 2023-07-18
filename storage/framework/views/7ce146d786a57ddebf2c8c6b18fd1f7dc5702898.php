<?php $__env->startSection('main-content'); ?>



    <div class="wrapper">
        <!-- MAIN CONTAINER -->
        <section class="main-container">
            <div class="location" id="home">
                <h1 id="myList">Trending Now</h1>
                <div class="box col-md-11">
                    <?php $__currentLoopData = $trendings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="detail/<?php echo e($item['id']); ?>"><img src="<?php echo e(asset('uploads/storeimages/' . $item['image'])); ?>"
                                alt="no image"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        <section class="main-container">
            <div class="location" id="home">
                <h1 id="movies">Web Series</h1>
                    <div class="box col-md-11">
                        <?php $__currentLoopData = $webseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="detail/<?php echo e($item['id']); ?>"><img src="<?php echo e(asset('uploads/storeimages/' . $item['image'])); ?>"
                                    alt="no image"></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        <section class="main-container">
            <div class="location" id="home">
                <h1 id="home">All</h1><br>
                <div class="box col-md-11">
                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="detail/<?php echo e($item['id']); ?>"><img src="<?php echo e(asset('uploads/storeimages/' . $item['image'])); ?>"
                                alt="no image"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>



        <!-- END OF MAIN CONTAINER -->

        <!-- LINKS -->
        <section class="link">
            <div class="logos">
                <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
                <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
            </div>
            <div class="sub-links">
                <ul>
                    <li><a href="#">Audio and Subtitles</a></li>
                    <li><a href="#">Audio Description</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Gift Cards</a></li>
                    <li><a href="#">Media Center</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Legal Notices</a></li>
                    <li><a href="#">Corporate Information</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </section>
        <!-- END OF LINKS -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/home/home.blade.php ENDPATH**/ ?>