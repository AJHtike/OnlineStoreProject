
<?php
session_start();
include "php/dbconnect.php";
$db_handle = new dbconnect();
?>
<!-- index.php page -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a page that non-register user(visitor), registered user and staff/admin user will allow to search by browsing category of the products according to the Horzontal links. -->
<!-- Version 2.0 -->
<!-- 29/Oct/2017 -->
<!-- code contributor: Alex -->

<!-- Include header_html.php to inject project banner and navigation. -->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Surf!n'buy | pinnacle of largest online store</title>
<link rel="stylesheet" href="CSS/style.css"/>


<!-- Link references from W3C schools : https://www.w3schools.com/icons/ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<?php include "php/header_html.php"; ?>




    <main>
      <!-- main content -->
      <!-- Whatever needed in the main content goes here!! -->
      <?php
      echo '<div id="product-grid">';
      // get the product category name which fetch by php get method.
        $q = $_GET['q'];
        // retieve the query with the functions where the cetegory name user clicked on to bring up.
        $product_array=$db_handle->runQuery("select * from Products where CategoryName = '".$q."'");
        if(!empty($product_array)){
        foreach ($product_array as $key => $value) {
          echo '<div class="product-item">';
          echo '<div class="product-image"><img src="'.$product_array[$key]["Image"].'"></div>';
          echo '<br />';
          echo '<br />';
          echo '<div><strong>'. $product_array[$key]["ProductName"]. '</strong></div>';
          echo '<div class="product-price">' . "$".$product_array[$key]["UnitPrice"].'</div>';
          echo '<div><b>Qty: </b><input type="text" name="quantity" value="1" size="2"/></div>';
          echo '<br />';
          echo '<div class="btnView"><a href="orderDetail.php?pid='.$product_array[$key]["ProductID"].'">View</a></div>';

          echo '<div><input type="submit" value="Order" class="btnOrderAction"/></div>';
          echo '</div>';
        }
      }
      echo '</div>';
      ?>
      </main>

    <aside>

      <form action="index.php" method="post">
        <input type="text" name="txtSearch" size="50" placeholder="Search Your Product"/>
        <input type = "submit" value = "Search" />
        <br />
        <br />
        <?php echo '<div class="btnrefSearch"><i class="fa fa-refresh" aria-hidden="true"></i> <a href="index.php">Refresh Search</a></div>';?>

      </form>
      <!-- Vertical browsing links to each category -->

      <nav>
        <ul>
          <li><a href="getproduct.php?q=laptop">Laptop</a></li>
          <li><a href="getproduct.php?q=tablet">Tablet</a></li>
          <li><a href="getproduct.php?q=mobile">Mobile</a></li>
        </ul>
      </nav>
    </aside>

    <!-- include footer_html.php to inject footer html to the project index page. -->
        <?php include "php/footer_html.php"; ?>


  </div>
</body>
</html>
