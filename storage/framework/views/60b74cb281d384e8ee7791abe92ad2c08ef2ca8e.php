 <!-- HEADER -->
 <header>
     <div class="netflixLogo">
         <a id="logo" href="#home"><img
                 src="<?php echo e(asset('images/netflix logo.jpg')); ?>"
                 alt="Logo Image"></a>
     </div>
     <nav class="main-nav">
         <a href="/home">Home</a>
         <a href="#">Webseries</a>
         <a href="#">All</a>
         <a href="/contact">Contact As</a>
         <a href="/about">About</a>
     </nav>
     <nav>
        <form action="<?php echo e(route('products.search')); ?>" method="GET" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input style="margin-right: 100px" type="text" name="query" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
    </nav>

     <ul class="nav navbar-nav navbar-center">
         <?php if(Session::has('user')): ?>
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(Session::get('user')['name']); ?> <b
                         class="caret"></b></a>
                 <ul class="dropdown-menu">

                     <li><a href="/logout">Logout</a></li>

                 </ul>
             </li>
         <?php else: ?>
             <li><a href="/login">Login</a></li>
         <?php endif; ?>

 </header>
 <!-- END OF HEADER -->
<?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/home/header.blade.php ENDPATH**/ ?>