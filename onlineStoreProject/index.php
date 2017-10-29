
<?php
session_start();
include "php/dbconnect.php";
$db_handle = new dbconnect();
?>
<!-- index.php page -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a page that non-register user(visitor), registered user and staff/admin user will see when the project url opening on browser. -->
<!-- Version 2.0 -->
<!-- 29/Oct/2017 -->
<!-- code contributor: Alex -->

<!-- Include header_html.php to inject project banner and navigation. -->
<?php include "php/header_html.php"; ?>

    <main>
      <!-- main content -->
      <?php
      echo '<div id="product-grid"';
      echo '<h1></h1>';
      // If the user didn't input anything to search or if it is the visitor
      // Trim the search text input withoud any unecessary spaces or Etc.,
      if(isset($_POST['txtSearch']))
      {
       $txtterm = trim($_POST['txtSearch']);
     }
      if(!empty($txtterm))
      {
        // Parsing into the array of prodcuts from database access data selection.
        $product_array = $db_handle->runQuery("select * from Products where ProductName LIKE '%$txtterm%'");
        if(!empty($product_array)){
          foreach ($product_array as $key => $value) {
            echo '<div class="product-item">';
            echo '<div class="product-image"><img src="'.$product_array[$key]["Image"].'"></div>';
            echo '<br />';
            echo '<br />';
            echo '<div><strong>'. $product_array[$key]["ProductName"]. '</strong></div>';
            echo '<div class="product-price">' . "$".$product_array[$key]["UnitPrice"].'</div>';
            echo '<div><input type="text" name="quantity" value="1" size="2"/></div>';
            echo '<br />';
            echo '<div><input type="submit" value="View" class="btnOrderAction"/></div>';
            echo '<div><input type="submit" value="Order" class="btnOrderAction"/></div>';
            echo '</div>';
          }
        }
      }

      else
      {
        $product_array = $db_handle->runQuery("select * from Products order by ProductID ASC");
        if(!empty($product_array)){
          foreach ($product_array as $key => $value) {
            echo '<div class="product-item">';
            echo '<div class="product-image"><img src="'.$product_array[$key]["Image"].'"></div>';
            echo '<br />';
            echo '<br />';
            echo '<div><strong>'. $product_array[$key]["ProductName"]. '</strong></div>';
            echo '<div class="product-price">' . "$".$product_array[$key]["UnitPrice"].'</div>';
            echo '<div><input type="text" name="quantity" value="1" size="2"/></div>';
            echo '<br />';
            echo '<div><input type="submit" value="View" class="btnOrderAction"/></div>';
            echo '<div><input type="submit" value="Order" class="btnOrderAction"/></div>';
            echo '</div>';
          }
        }
      }
      echo '</div>';
      ?>
      </main>

    <aside>

      <form action="index.php" method="post">
        <input type="text" name="txtSearch" size="50" placeholder="Search Your Product"/>
        <input type = "submit" value = "Search" />
      </form>
      <!-- Horizontal browsing links to each category -->

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
