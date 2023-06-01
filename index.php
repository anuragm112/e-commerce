<?php
require("./includes/common.php");

if (isset($_SESSION['email'])) {
  header('location: home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        
       <?php       
       include './includes/links.php';  
       ?>
        
        <style>
       .banner_image{
                 padding-top: 75px;
         padding-bottom: 50px;
         text-align: center;
         color: #f8f8f8;
         background: url(img/intro-bg_1.jpg);
        background-size: 100% 100%;
             }
            
             .thumbnail{
                display:inline-block;
                  height:auto;
                  padding:3px;
                  margin-bottom: 20px;
                 background-color:#fff;
                  border:1px solid #a4a4a4;
                  text-align:center;
                  color:#666;
                  margin:15px;
             } 
             .banner_content
             {
                   position: relative;
           padding-top: 6%;
          padding-bottom: 6%;
          margin-top: 12%;
         margin-bottom: 12%;
         background-color: rgba(0, 0, 0, 0.7);
         max-width: 660px;
             }
            
        </style>
    </head>
    <body>
       
        <?php
        include 'includes/header.php';
        ?>
       

        <div class="content">   
            <div class= "banner_image">
                <div class="container">	
                    <center>
                        <div class="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="home.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="home.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="home.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="home.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>