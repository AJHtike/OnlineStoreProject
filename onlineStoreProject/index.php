
<?php
session_start();
require_once "php/dbconnect.php";
$db_handle = new dbconnect();
?>
<!-- index.php page -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a page that non-register user(visitor), registered user and staff/admin user will see when the project url opening on browser. -->
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
      <?php
      echo '<div id="product-grid">';
      // If the user didn't input anything to search or if it is the visitor
      // Trim the search text input withoud any unecessary spaces or Etc.,
      if(isset($_POST['txtSearch']))
      {
       $txtterm = trim($_POST['txtSearch']);
      //  Storing inside the session as textSearch and will retrieve later.
       $_SESSION['textSearch'] = $txtterm;
     }
      if(!empty($txtterm))
      {
        // Parsing into the array of prodcuts from database access data selection.
        // This line of code is getting the class of configure database and its function
        // then, array of resultset will return to product array
        // then, passing with for each loop to get key and value of each product items columns.
        // This object oriented method is efficient to use memory allocations.
        $product_array = $db_handle->runQuery("select * from Products where ProductName LIKE '%$txtterm%'");
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
            // This link is going to orderdetail.php to handle to view specified item selected to preview.
            echo '<div class="btnView"><a href="orderDetail.php?pid='.$product_array[$key]["ProductID"].'">View</a></div>';
            echo '<div><input type="submit" value="Order" class="btnOrderAction"/></div>';
            echo '</div>';
          }
        }
        else {
            echo '<p>No Products Found, Please type again!</p>';
            // if user didn't enter then didn't save anything in the session string.
            $_SESSION['textSearch'] = "No Search Entry either! ";
        }
      }
       else {
          echo '<p>Please Enter you Search <i>For example, start typing product name "galaxy".</i></p>';
          // This line of code is getting the class of configure database and its function
          // then, array of resultset will return to product array
          // then, passing with for each loop to get key and value of each product items columns.
          // This object oriented method is efficient to use memory allocations.
          $product_array = $db_handle->runQuery("select * from Products order by ProductID ASC");
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
              // This link is going to orderdetail.php to handle to view specified item selected to preview.
              echo '<div class="btnView"><a href="orderDetail.php?pid='.$product_array[$key]["ProductID"].'">View</a></div>';
              echo '<div><input type="submit" value="Order" class="btnOrderAction"/></div>';
              echo '</div>';
            }
          }
          else {
              echo '<p>No Products Found, Please type again!</p>';
              // if user didn't enter then didn't save anything in the session string.
              $_SESSION['textSearch'] = "No Search Entry either! ";
          }
      }


      //testing session variable to print them out all or specified save: var_dump($_SESSION['textSearch']);
      echo '</div>';

      // This div will display the users' last search entry with php session tracking files.
      echo '<div class="lastsearch">';
      echo '<h1>Your Last Search Entry: </h1>';
      echo '<br />';
      // this loop will be getting session string variable and their value from the session files in the browsers.
      foreach ($_SESSION as $key=>$val){
        echo $val;
      }
      echo '</div>';

      ?>
      </main>

    <aside>
      <!-- Search From aside container -->
      <form action="index.php" method="post">
        <input type="text" name="txtSearch" size="50" placeholder="Search Your Product" required/>
        <input type = "submit" value = "Search"/>
        <br />
        <br />
        <?php echo '<div class="btnrefSearch"><i class="fa fa-refresh" aria-hidden="true"></i> <a href="index.php">Refresh Search</a></div>';?>

      </form>
      <!-- Horizontal browsing links to each category -->

      <nav>
        <ul>
          <!-- This is direct link passing with get to retrieve each categories. -->
          <li><a href="getproduct.php?q=laptop">Laptop</a></li>
          <!-- This is direct link passing with get to retrieve each categories. -->
          <li><a href="getproduct.php?q=tablet">Tablet</a></li>
          <!-- This is direct link passing with get to retrieve each categories. -->
          <li><a href="getproduct.php?q=mobile">Mobile</a></li>
        </ul>
      </nav>
    </aside>
<!-- include footer_html.php to inject footer html to the project index page. -->
    <?php include "php/footer_html.php"; ?>

  </div>
</body>
</html>
