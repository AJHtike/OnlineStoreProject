
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
<?php include "php/header_html.php"; ?>




    <main>
      <!-- main content -->
      <!-- Whatever needed in the main content goes here!! -->
      <?php
      echo '<div id="product-grid"';
      echo '<h1></h1>';

        $q = $_GET['q'];
        $product_array=$db_handle->runQuery("select * from Products where CategoryName = '".$q."'");
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
      echo '</div>';
      ?>
      </main>

    <aside>

      <form action="index.php" method="post">
        <input type="text" name="txtSearch" size="50" placeholder="Search Your Product"/>
        <input type = "submit" value = "Search" />
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
