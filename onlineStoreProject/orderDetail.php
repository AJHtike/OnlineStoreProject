<?php
session_start();
include "php/dbconnect.php";
$db_handle = new dbconnect();
?>
<!-- orderDetail.php page -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a page that display details of the order which user/visitor/staff click to view.-->
<!-- Version 2.0 -->
<!-- 29/Oct/2017 -->
<!-- code contributor: Alex -->

<!-- Include header_html.php to inject project banner and navigation. -->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Surf!n'buy | pinnacle of largest online store</title>
<link rel="stylesheet" href="CSS/orderdetail_style.css"/>



<!-- Link references from W3C schools : https://www.w3schools.com/icons/ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<?php include "php/header_html.php"; ?>

    <main>
      <!-- main content -->
      <!-- This page is to display the user selected product/items' details information. -->
      <?php
      echo '<div id="product-detail">';
      echo '<h1>Product Details</h1>';
      // This is the ID that can be able to retrieve from the get method line and catching the product id which user selected to view.
      $pid = $_GET['pid'];
      // php sql function to match the product id which user selected to view.
      $product_array = $db_handle->runQuery("select * from Products where ProductID = '".$pid."'");
      if(!empty($product_array)){
      foreach ($product_array as $key => $value) {
        echo '<div class="product-item">';
        echo '<div class="productdetail-image"><img src="'.$product_array[$key]["Image"].'"></div>';
        echo '<div class="product-name">Product Name: <strong>'. $product_array[$key]["ProductName"]. '</strong></div>';
        echo '<br />';
        echo '<div class="product-desc">Description: <p>'. $product_array[$key]["Description"].'</p></div>';
        echo '<br />';
        echo '<div class="product-price">Price: ' . "$".$product_array[$key]["UnitPrice"].'</div>';
        echo '<br />';
        echo '<div class="product-qty"><strong>Qty: </strong><input type="text" name="quantity" value="1" size="2"/></div>';
        echo '<br />';
        echo '<div class="product-order"><input type="submit" value="Order" class="btnOrderAction"/></div>';
        echo '<div class="btnView"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> <a href="index.php">Continue Shopping</a></div>';
        echo '</div>';
      }
    }
    echo '</div>';
    ?>
      </main>

<!-- include footer_html.php to inject footer html to the project index page. -->
    <?php include "php/footer_html.php"; ?>

  </div>
</body>
</html>
