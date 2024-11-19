<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php">
                        <img class="img-rounded" src="images/icn.png" alt="" style="width: 40px; height: 40px;"></a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="collections.php">Collections <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header>

        <section class="hero bg-image" data-image-src="images/img/bg.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Forever Gems Jewelry </h1>
                    <div class="banner">
                        <a href="#popular-jewelry" class="link-to-popular-jewelry">
                            Explore Stunning Jewelry
                        </a>
                    </div>

                </div>
            </div>
      
        </section>
      
      <!-- Popular Items section -->
<section class="popular" id="popular-jewelry">
    <div class="container">
        <div class="title text-xs-center m-b-30">
            <h2>Trending Jewelry of the Month</h2>
            <p class="lead">Easiest Way to Choose Your Favorite Jewelry from Our Top 6 Picks</p>
        </div>

        <!-- Carousel -->
        <div id="popularJewelCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <!-- Each carousel item (set of 4 items) -->
                <?php
                // PHP loop to fetch jewelry from the database
                $query_res = mysqli_query($db, "SELECT * FROM jewelry LIMIT 6");
                $dish_count = 0;
                $items_in_row = 3; // Number of items to display per slide
                $carousel_items = '';
                while ($r = mysqli_fetch_array($query_res)) {
                    if ($dish_count % $items_in_row == 0) {
                        if ($carousel_items) {
                            echo '</div>'; // Close previous row
                        }
                        echo '<div class="carousel-item '. ($dish_count == 0 ? 'active' : '') .'"><div class="d-flex justify-content-around">';
                    }

                    echo '<div class="pieces-item-wrap">
                            <div class="figure-wrap bg-image" data-image-src="admin/Res_img/jewelry/'.$r['img'].'"></div>
                            <div class="content">
                                <h5><a href="jewelry.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
                                <div class="product-name">'.$r['slogan'].'</div>
                                <div class="price-btn-block">
                                    <span class="price">$'.$r['price'].'</span>
                                    <a href="jewelry.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order Now</a>
                                </div>
                            </div>
                        </div>';
                    
                    $dish_count++;
                    if ($dish_count % $items_in_row == 0 || $dish_count == mysqli_num_rows($query_res)) {
                        echo '</div></div>'; // Close row and carousel item
                    }
                }
                ?>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#popularJewelCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#popularJewelCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

 
        <section class="how-it-works">
            <div class="container">
                <div class="text-xs-center">
                    <h2>Easy to Order</h2>
                    <div class="row how-it-works-solution">
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                            <div class="how-it-works-wrap">
                                <div class="step step-1">
                                    <div class="icon" data-step="1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483 483" width="512" height="512">
                                            <g fill="#FFF">
                                                <path d="M467.006 177.92c-.055-1.573-.469-3.321-1.233-4.755L407.006 62.877V10.5c0-5.799-4.701-10.5-10.5-10.5h-310c-5.799 0-10.5 4.701-10.5 10.5v52.375L17.228 173.164a10.476 10.476 0 0 0-1.22 4.938h-.014V472.5c0 5.799 4.701 10.5 10.5 10.5h430.012c5.799 0 10.5-4.701 10.5-10.5V177.92zM282.379 76l18.007 91.602H182.583L200.445 76h81.934zm19.391 112.602c-4.964 29.003-30.096 51.143-60.281 51.143-30.173 0-55.295-22.139-60.258-51.143H301.77zm143.331 0c-4.96 29.003-30.075 51.143-60.237 51.143-30.185 0-55.317-22.139-60.281-51.143h120.518zm-123.314-21L303.78 76h86.423l48.81 91.602H321.787zM97.006 55V21h289v34h-289zm-4.198 21h86.243l-17.863 91.602h-117.2L92.808 76zm65.582 112.602c-5.028 28.475-30.113 50.19-60.229 50.19s-55.201-21.715-60.23-50.19H158.39zM300 462H183V306h117v156zm21 0V295.5c0-5.799-4.701-10.5-10.5-10.5h-138c-5.799 0-10.5 4.701-10.5 10.5V462H36.994V232.743a82.558 82.558 0 0 0 3.101 3.255c15.485 15.344 36.106 23.794 58.065 23.794s42.58-8.45 58.065-23.794a81.625 81.625 0 0 0 13.525-17.672c14.067 25.281 40.944 42.418 71.737 42.418 30.752 0 57.597-17.081 71.688-42.294 14.091 25.213 40.936 42.294 71.688 42.294 24.262 0 46.092-10.645 61.143-27.528V462H321z" />
                                                <path d="M202.494 386h22c5.799 0 10.5-4.701 10.5-10.5s-4.701-10.5-10.5-10.5h-22c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5z" /> </g>
                                        </svg>
                                    </div>
                                    <h3>Choose Your Style Piece</h3>
                                    <p>We've Got You Covered with a Wide Range of Exquisite Jewelry Pieces Online.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                            <div class="step step-2">
                                <div class="icon" data-step="2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="necklace">
                                <g fill="#FFF">
                                    <path d="m43.851,18.595l-7.284-2.18c-2.134-.639-3.567-2.564-3.567-4.791v-5.625c0-1.654-1.346-3-3-3h-12c-1.654,0-3,1.346-3,3v5.625c0,2.227-1.434,4.152-3.567,4.791l-7.284,2.18c-1.349.404-2.249,1.72-2.14,3.131.857,11.008,10.1,23.274,21.991,23.274s21.134-12.266,21.991-23.274c.109-1.41-.791-2.727-2.14-3.13Zm-26.851-6.97v-5.625c0-.551.448-1,1-1h12c.552,0,1,.449,1,1v5.625c0,3.095,1.981,5.769,4.931,6.682-2.532,4.154-6.999,6.693-11.931,6.693s-9.399-2.538-11.931-6.693c2.951-.913,4.931-3.588,4.931-6.682Zm7,18.434l1,.5v1.882l-1,.5-1-.5v-1.882l1-.5Zm0,12.941c-10.802,0-19.208-11.293-19.997-21.429-.037-.479.266-.924.72-1.06l5.378-1.609c2.677,4.724,7.49,7.732,12.899,8.063v1.357l-.895.447c-.682.341-1.105,1.026-1.105,1.789v1.882c0,.763.424,1.448,1.105,1.789l1.224.612c.21.105.44.157.671.157s.461-.052.671-.157l1.224-.612c.682-.341,1.105-1.026,1.105-1.789v-1.882c0-.763-.424-1.448-1.105-1.789l-.895-.447v-1.357c5.409-.332,10.223-3.339,12.899-8.063l5.378,1.609c.454.136.757.582.72,1.06-.789,10.136-9.195,21.429-19.997,21.429Z"></path></g>
                                </svg>
                                </div>
                                <h3>Select a Jewelry Piece</h3>
                                <p>Discover a Variety of Timeless Jewelry Collections Online.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                            <div class="step step-3">
                                <div class="icon" data-step="3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                        <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" /> </svg>
                                </div>
                                <h3>Pick up or Delivery</h3>
                                <p>Get Your Jewelry Delivered! And Shine Bright! </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="pay-info">Cash on Delivery</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="featured-collections">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h4>Shop by Style</h4> </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="collections-filter pull-right">
                            <nav class="primary pull-left">
                                <ul>
                                    <li><a href="#" class="selected" data-filter="*">all</a> </li>
									<?php 
									$res= mysqli_query($db,"select * from jewel_category");
									      while($row=mysqli_fetch_array($res))
										  {
											echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
										  }
									?>
                                   
                                </ul>
                            </nav>
                        </div>
          
                    </div>
                </div>
    
                <div class="row">
                    <div class="collection-listing">
                        
						
						<?php  
						$ress= mysqli_query($db,"select * from collections");  
									      while($rows=mysqli_fetch_array($ress))
										  {
													
													$query= mysqli_query($db,"select * from jewel_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);
						
													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-collection all '.$rowss['c_name'].'">
														<div class="collection-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="collection-logo" href="jewelry.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
																</div>
													
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="jewelry.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																</div>
													
															</div>
												
														</div>
												
													</div>';
										  }
						
						
						?>
					
                    </div>
                </div>
     
               
            </div>
        </section>
        
      
    <footer class="footer">
    <div class="container">
        <div class="bottom-footer">
            <div class="row">
                <!-- Payment Options Section (kept the same) -->
                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                    <h5>Payment Options</h5>
                    <ul>
                        <li>
                            <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                        </li>
                    </ul>
                </div>

                <!-- Company Description Section -->
                <div class="col-xs-12 col-sm-4 company-description color-gray">
                    <h5>The Forever Gems Jewelry</h5>
                    <p>We are an online jewellery store selling minimal & trendy jewellery made of high quality at affordable prices.</p>
                </div>

                <!-- Navigation Links Section -->
                <div class="col-xs-12 col-sm-3 navigation-links color-gray">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="collections.php">Collections</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registration.php">Register</a></li>
                        <li><a href="your_orders.php">Your Orders</a></li>
                        <li><a href="index.php">Terms & Conditions</a></li>
                    </ul>
                </div>

                <!-- Contact Information Section -->
                <div class="col-xs-12 col-sm-2 contact-info color-gray">
                    <h5>Contact Us</h5>
                    <p>Address: 1086 Stockert Hollow Road, Seattle</p>
                    <p>Phone: 75696969855</p>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="row">
                <div class="col-12 text-center color-gray">
                    <p>Copyright © 2024, Forever Gems Jewelry. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/piecespicky.min.js"></script>
</body>

</html>