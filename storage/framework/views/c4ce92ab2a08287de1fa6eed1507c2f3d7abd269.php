<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Subscription Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>

   <body class="inner_page price_table">

               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Price Table</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Pricing Table</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- column price -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head blue1_bg">
                                                <h2>Free Plan</h2>
                                             </div>

                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p  class="blue1_color"> <span class="price_no">Free</span></p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                            <form action="/sub" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" hidden value="0"  name="payment">
                                             <div class="price_table_bottom">
                                                <div class="center"><button type="submit" class="main_bt">Buy Now</button></div>
                                             </div>
                                            </form>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head green_bg">
                                                <h2>Basic Plan</h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="green_color">Rs/- <span class="price_no">200</span> Monthly</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <form action="/sub" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" hidden value="1"  name="payment">
                                             <div class="price_table_bottom">
                                                <div class="center">><button type="submit" class="main_bt">Buy Now</button></div>
                                             </div>
                                            </form>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->

                                    <!-- column price -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head yellow_bg">
                                                <h2>Premium Plan</h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="yellow_color">Rs/- <span class="price_no">500</span> Monthly</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <form action="/sub" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" hidden value="2" name="payment">
                                             <div class="price_table_bottom">
                                                <div class="center">><button type="submit" class="main_bt">Buy Now</button></div>
                                             </div>
                                            </form>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script>
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <!-- calendar file css -->
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>
<?php /**PATH D:\Netflix Task\Netflix\NetflixTask\resources\views/home/subscription.blade.php ENDPATH**/ ?>