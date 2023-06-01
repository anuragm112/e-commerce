<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/links.php'; ?>
    <title>Cart</title>
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/header.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
    <div class="content" style="margin-top: 100px;">
        <div class="container">        
        <table class="table table-striped table-responsive">
        <?php
       
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                $id = rtrim($id, ", ");
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
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