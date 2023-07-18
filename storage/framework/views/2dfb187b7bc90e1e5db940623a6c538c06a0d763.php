<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="<?php echo e(url('https://use.fontawesome.com/releases/v5.1.0/js/all.js')); ?>"
        integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous">
    </script>

    <script src="main.js"></script>




<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo e(url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css')); ?>">

<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo e(url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')); ?>"></script>

<link rel="stylesheet" href="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')); ?>">

<link href="<?php echo e(url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
<script src="<?php echo e(url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js')); ?>"></script>

</head>
<style>



    /* CSS VARIABLES */
:root {
    --primary: #141414;
    --light: #F3F3F3;
    --dark: 	#686868;
  }

  html, body {
    width: 100vw;
    min-height: 100vh;
    margin: 0;
    padding: 0;
    background-color: var(--primary);
    color: var(--light);
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    line-height: 1.4;
  }

  img {
    max-width: 100%;
  }

  h1 {
    padding-top: 60px;
  }

  .wrapper {
    margin: 0;
    padding: 0;
  }

  /* HEADER */
  header {
    padding: 20px 20px 0 20px;
    position: fixed;
    top: 0;
    display: grid;
    grid-gap:5px;
    grid-template-columns: 1fr 4fr 1fr;
    grid-template-areas:
     "nt mn mn sb . . . ";
    background-color: var(--primary);
    width: 100%;
    margin-bottom: 0px;
  }

  .netflixLogo {
    grid-area: nt;
    object-fit: cover;
    width: 100px;
    max-height: 100%;

    padding-left: 30px;
    padding-top: 0px;
  }

  .netflixLogo img {
    height: 35px;
  }

  #logo {
    color: #E50914;
    margin: 0;
    padding: 0;
  }


  .main-nav {
    grid-area: mn;
    padding: 0 30px 0 20px;
  }

  .main-nav a {
    color: var(--light);
    text-decoration: none;
    margin: 5px;
  }

  .main-nav a:hover {
    color: var(--dark);
  }

  .sub-nav {
    grid-area: sb;
    padding: 0 40px 0 40px;
  }

  .sub-nav a {
    color: var(--light);
    text-decoration: none;
    margin: 5px;
  }

  .sub-nav a:hover {
    color: var(--dark);
  }


  /* MAIN CONTIANER */
  .main-container {
    padding: 50px;
  }

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(6, minmax(100px, 1fr));
  }

  .box a {
    transition: transform .3s;
  }

  .box a:hover {
    transition: transform .3s;
    -ms-transform: scale(1.4);
    -webkit-transform: scale(1.4);
    transform: scale(1.4);
  }

  .box img {
    width: 1000px;
    border-radius: 2px;
    height: 200px;

  }

  /* LINKS */
  .link {
    padding: 50px;
  }

  .sub-links ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(4, 1fr);
  }

  .sub-links a {
    color: var(--dark);
    text-decoration: none;
  }

  .sub-links a:hover {
    color: var(--dark);
    text-decoration: underline;
  }

  .logos a{
    padding: 10px;
  }

  .logo {
    color: var(--dark);
  }


  /* FOOTER */
  footer {
    padding: 20px;
    text-align: center;
    color: var(--dark);
    margin: 10px;
  }

  /* MEDIA QUERIES */

  @media(max-width: 900px) {

    header {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(2, 1fr);
      grid-template-areas:
      "nt nt nt  .  .  . sb . . . "
      "mn mn mn mn mn mn  mn mn mn mn";
    }

    .box {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(4, minmax(100px, 1fr));
    }

  }

  @media(max-width: 700px) {

    header {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(2, 1fr);
      grid-template-areas:
      "nt nt nt  .  .  . sb . . . "
      "mn mn mn mn mn mn  mn mn mn mn";
    }

    .box {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(3, minmax(100px, 1fr));
    }

    .sub-links ul {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(3, 1fr);
    }

  }

  @media(max-width: 500px) {

    .wrapper {
      font-size: 15px;
    }

    header {
      margin: 0;
      padding: 20px 0 0 0;
      position: static;
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(1, 1fr);
      grid-template-areas:
      "nt"
      "mn"
      "sb";
      text-align: center;
    }

    .netflixLogo {
      max-width: 100%;
      margin: auto;
      padding-right: 20px;
    }

    .main-nav {
      display: grid;
      grid-gap: 0px;
      grid-template-columns: repeat(1, 1fr);
      text-align: center;
    }

    h1 {
      text-align: center;
      font-size: 18px;
    }



    .box {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(1, 1fr);
      text-align: center;
    }

    .box a:hover {
      transition: transform .3s;
      -ms-transform: scale(1);
      -webkit-transform: scale(1);
      transform: scale(1.2);
    }

    .logos {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(2, 1fr);
      text-align: center;
    }

    .sub-links ul {
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(1, 1fr);
      text-align: center;
      font-size: 15px;
    }





  }

</style>

<body>
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->startSection('main-content'); ?>

    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/home/master.blade.php ENDPATH**/ ?>