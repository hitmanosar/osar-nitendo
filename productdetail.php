<?php

 require_once "connection.php";
 
 session_start();

 if(!(isset( $_SESSION['username']))){
    header('location:index.php');
}

elseif(!(isset( $_SESSION['for user']))){
    header('location:index.php');
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT DETAIL</title>
    <link rel="stylesheet" href=" bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="productdetail.css">


</head>






<body>
    <nav class="navbar navbar-expand-lg navbar-light container-fluid " id="navbar">
        <div class="logo"> <a class="navbar-brand pl-3 " href="#"><img src="images/logo.svg" alt=""></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-5  ml-auto " id="navbar-nav">
                <a class="nav-link  text-white " href="home.php">Home </a>
                <a class="nav-link text-white" href="#product">Products</a>
                <a class="nav-link text-white" href="#about">About</a>
                <a class="nav-link text-white" href="#service">Services</a>
                <a class="nav-link text-white" href="contact.php">Contact</a>
                <a class="nav-link text-white" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>


    <!-- --------- Carousel Start------------ -->

    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active     " id="color"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" id="color"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" id="color"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="images/slide1.avif" class="d-block w-100" alt="..." height="440px">

            </div>
            <div class="carousel-item">
                <img src="images/slide3.jpg" class="d-block w-100" alt="..." height="440px">

            </div>
            <div class="carousel-item">
                <img src="images/slider3.avif" class="d-block w-100" alt="..." height="440px">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true" id="icon"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" id="icon"></span>
            <span class="sr-only">Next</span>
        </button>
    </div> <br> <br> <br> <br> <br>
    <!-- --------- Carousel End------------ -->

    <?php 

if(isset($_REQUEST['detail_each'])){
   
  $detail_each = $_REQUEST['detail_each'];

  $sqlshow_detail = "SELECT * FROM `product` WHERE `product_id` = $detail_each  " ;

  $resultshow_detail = mysqli_query($con,$sqlshow_detail);

  if($resultshow_detail){

      $show_detail=mysqli_fetch_assoc($resultshow_detail);
  }
 
    
}

?>


               <div class="each_container" id="each_containers" >
                     
                <div class="each_image">
                    <img src="for nitendo/<?php echo $show_detail['product_image']; ?>" alt="">
                </div> <br> <br> <br>


                <div class="each_detail">
                      
                 <p>Name: <span class="each_span"> <?php echo $show_detail['product_name']; ?>  </span> </p>  <hr>
                 <p>Detail: </p>
      <p><span class="each_span"><?php echo $show_detail['detail']; ?>  </span></p>
  <hr>

 <p>size: <span class="each_span"><?php echo $show_detail['size']; ?> </span> </p> <hr>
 <p>Price: <span class="each_span"><?php echo $show_detail['price']; ?> </span> </p>   <hr>
 <p>Language: <span class="each_span"> <?php echo $show_detail['language']; ?></p> </span>  <hr>
 <p>Release Date: <span class="each_span"> <?php echo $show_detail['date']; ?></p> </span>   <hr>
 <p>Genre: <span class="each_span"> <?php echo $show_detail['genre']; ?>  </span>  </p>


                </div>

                <a  class="btn btn-lg  mt-3" id="btview"  href="order.php?order_id=<?php echo $show_detail['product_id']; ?>#each_containers" >
                            Buy Now</a>

                 <a  class="btn btn-lg  mt-3" id="btview" href="home.php#product">
                            Cancel</a>



               </div>

    <!-- --------- About Start------------ -->
    <div class="aboutpage mt-5 " id="about">
        <div class="container about">
            <div class="row">
                <div class="col-md-6 about-text ">
                    <span class="about-title ">About</span>
                    <h2>New update! </h2>
                    <p class=" mt-4 text-black-50 ">
                        Earthworm Jim 2

                        Released for the Super NES™ console in 1995, you worm your way back into your super suit and take on the role of Jim, the annelid with attitude! The plot picks up after Jim's successful rescue of Princess What's-Her-Name and his less-than-successful attempts to woo her immediately thereafter. Just when it seemed the princess would have a change of heart, the evil Psy-Crow swooped in and kidnapped her, eager to claim the crown for himself. Now it's up to Jim to stop their wedding. But he's not alone this time—his pal Snott is along for the ride. Jump, shoot, swing, and slime your way across 10 different levels, catch Psy-Crow, and rescue the girl of Jim's dreams!
                    </p>
                    <button type="button" class="btn  mt-2 text-black" width="110px" height="35px">Read More</button>
                </div>

                <div class="about-image col-md-6 mt-2 ">
                    <img src="for nitendo/bg.webp" alt=" " class="img-fluid ml-3">
                </div>
            </div>
        </div>
    </div>
    <!-- --------- About End------------ -- -->
    <!-- service start -->
    <div class="container text-center mt-5 " id="service">
        <div class="card border-0">
            <h3 class="mb-5 mt-5">Our Services</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mt-2"> <img src="https://i.imgur.com/2tx0muB.png" width="50" height="50" /> </div>
                        <h3 class="mt-3">Sell digital content</h3>
                        <p>Start selling eBooks, video files, audio files, PDFs, checklinst text, or just about anything.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mt-2"> <img src="https://i.imgur.com/6NHM9Xy.png" width="50" height="50" /> </div>
                        <h3 class="mt-3">Beautiful landing pages</h3>
                        <p>Sales pages that will match your brand or offer upsells to your supporters.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="mt-2"> <img src="https://i.imgur.com/9qaHVGj.png" width="50" height="50" /> </div>
                        <h3 class="mt-3">Connect with supporters</h3>
                        <p>Using sales pages you can connect with your customers using our chatbot system.</p>
                    </div>
                </div>
            </div>
            <div class="button mt-5 mb-4"> <button class="btn  pro-button">More Service</button> </div>
        </div>
    </div>
    <!-- service end -->
    <!-- footer start -->
    <footer class=" text-center text-lg-start bg-light text-muted mt-5 " id="footer">

        <section class=" d-flex justify-content-center justify-content-lg-between p-4 border-bottom social">
            <div class=" me-5 d-none d-lg-block text-white ">
                <span>Get connected with us on social networks:</span>
            </div>

            <div>
                <a href=" " class=" me-4 text-reset pr-3 ">
                    <i class=" fab fa-facebook-f text-white "></i>
                </a>
                <a href=" " class=" me-4 text-reset pr-3 ">
                    <i class=" fab fa-twitter text-white"></i>
                </a>
                <a href=" " class=" me-4 text-reset pr-3 ">
                    <i class=" fab fa-google text-white"></i>
                </a>
                <a href=" " class=" me-4 text-reset pr-3 ">
                    <i class=" fab fa-instagram text-white"></i>
                </a>
                <a href=" " class=" me-4 text-reset pr-3 ">
                    <i class=" fab fa-linkedin text-white"></i>
                </a>
                <a href=" " class=" me-4 text-reset pr-3 ">
                    <i class=" fab fa-github text-white"></i>
                </a>
            </div>

        </section>

        <section class=" "></section>
        <div class=" container text-center text-md-start mt-5 ">

            <div class=" row mt-3 ">

                <div class=" col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">

                    <h6 class=" text-uppercase fw-bold mb-4 ">
                        <img src="images/logo.svg " alt=" " width=" 80px ">
                    </h6>
                    <p>
                        We collect information about your use of and interaction with our services. This could include information about your gameplay, your online status, your service use history,
                    </p>
                </div>

                <div class=" col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                    <!-- Links -->
                    <h6 class=" text-uppercase fw-bold mb-4 ">
                        Products
                    </h6>
                    <p>
                        <a href=" #! " class=" text-reset ">Careers</a>
                    </p>
                    <p>
                        <a href=" #! " class=" text-reset ">Nintendo NY store</a>
                    </p>
                    <p>
                        <a href=" #! " class=" text-reset ">Repairs</a>
                    </p>
                    <p>
                        <a href=" #! " class=" text-reset ">Privacy policy</a>
                    </p>
                </div>

                <div class=" col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">

                    <h6 class=" text-uppercase fw-bold mb-4 ">
                        Shops
                    </h6>
                    <p>
                        <a href=" #! " class=" text-reset ">Games</a>
                    </p>
                    <p>
                        <a href=" #! " class=" text-reset ">Hardware</a>
                    </p>
                    <p>
                        <a href=" #! " class=" text-reset ">Exclusives</a>
                    </p>
                    <p>
                        <a href=" #! " class=" text-reset ">Online service</a>
                    </p>
                </div>

                <div class=" col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 ">

                    <h6 class=" text-uppercase fw-bold mb-4 ">
                        Contact
                    </h6>
                    <p><i class=" fas fa-home me-3 "></i> No ( 435 ), Kabaraye Pagoda Road, Yangon,
                        Myanmar.
                    </p>
                    <p>
                        <i class=" fas fa-envelope me-3 "></i> info@nintendomyanmar.com
                    </p>
                    <p><i class=" fas fa-phone me-3 "></i> +95 9534533 </p>
                    <p><i class=" fas fa-print me-3 "></i> 01 455 0894</p>
                </div>




            </div>

            <div class=" text-center p-4 ">
                © 2022 Copyright:
                <a class=" text-reset fw-bold ">nintendo.com</a>
            </div>


        </div>
        </section>



    </footer>

    <!-- footer end -->



    <script src="css/jquery.js"></script>
    <script src="css/popper.js"></script>
    <script src="css/bootstrap.min.js"></script>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>