<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front Page</title>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">


    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<style>
    body {
        background-color: black;
    }

    .netflixLogo {
        grid-area: nt;
        object-fit: cover;
        width: 100px;
        max-height: 100%;

        padding-left: 30px;
        padding-top: 50px;
    }

    .netflixLogo img {
        height: 100px;
        width: 180px;
    }

    #logo {
        color: #E50914;
        margin: 0;
        padding: 0;
    }

    .header-content {
        color: white;
        text-align: center;
        margin-top: 100px;
    }

    .sign-in-button {
        text-align: right;
        position: absolute;
        top: 50px;
        right: 100px;
    }
</style>

<body>
    <div class="netflixLogo">
        <a id="logo" href="#home"><img src="<?php echo e(asset('images/netflix logo.jpg')); ?>" alt="Logo Image"></a>
    </div>
    <div class="header-content">
        <h1>Unlimited movies,TV shows and more</h1>
        <h2>Watch anywhere. Cancel anytime.</h2>
    </div>
    <div class="header-content">
        <h2>Ready to Watch?Enter your email to create or restart your membership</h2>
        <form action="/submit" method="POST" class="form-inline">
            <?php echo csrf_field(); ?>
            <div class="input-box">
                <label class="details">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                <button class="btn btn-danger" type="submit">Submit</button>
        </form>
    </div>
    </div>
</body>

</html>
<?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/home/frontpage.blade.php ENDPATH**/ ?>