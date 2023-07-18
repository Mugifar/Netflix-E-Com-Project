<?php $__env->startSection('main-content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

    <div class="container" style="width: 100%; min-height: 600px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Movies Add</h2>
            </div>
            <div class="panel-body">
                <form method="POST" enctype="multipart/form-data" action="/moviesadd">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="sel1">Movie Category</label>
                        <div class="col-md-6">
                            <select class="form-control" id="sel1" name="category">
                                <option>Romance</option>
                                <option>Drama</option>
                                <option>Horror</option>
                                <option>Thrillers</option>
                                <option>Sci-Fi</option>
                                <option>Action</option>
                                <option>Web Series</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Cast</label>
                        <div class="col-md-6">
                            <input type="text" name="cast" class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Language</label>
                        <div class="col-md-6">
                            <input type="text" name="language" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Release Year</label>
                        <div class="col-md-6">
                            <input type="text" name="year" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Run Time</label>
                        <div class="col-md-6">
                            <input type="text" name="runtime" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Genres</label>
                        <div class="col-md-6">
                            <input type="text" name="genres" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Discription</label>
                        <div class="col-md-6">
                            <input type="text" name="discription" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Image</label>
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Clip</label>
                        <div class="col-md-6">
                            <input type="file" name="movie_clip" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops! There are problems in uploading the image.</strong>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <div>
        <a href="/home">Home</a>
    </div>


</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/admin/sellers.blade.php ENDPATH**/ ?>