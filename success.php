<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Success | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/header.php';
        // $user_id = $_SESSION["user_id"];
        // $query = "SELECT product_id FROM users_products WHERE user_id = '$user_id'";
        // $result = mysqli_query($con, $query) or die(mysqli_error($con));

        // while($row = mysqli_fetch_array($result)){
        //     $product_id = $row["product_id"];
        //     $query_update = "UPDATE users_products SET status = 'Confirmed' WHERE product_id = '$product_id'";            
        //     $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        // }
       
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content" style="margin-top: 100px;">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron">
                  <h3> Your order is confirmed. Thank you for shopping with us.</h3><hr>
                <h5 class="text-center">To Continue Shopping , <a href="home.php">Click here</a></h5>
              </div>
            </div>
          </div>
        </div>
    <!-- !Main -->

    <!-- Footer -->
    <?php
        require './includes/footer.php';
    ?>  
    <!-- !Footer -->
</body>
</html>