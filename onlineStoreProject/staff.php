
<?php
session_start();
include "php/dbconnect.php";
$db_handle = new dbconnect();
?>
<!-- staff.php page -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a page that display only staff/admin user will see when the project url opening on browser,
it includes add product,remove product, remove user account and staff account -->
<!-- Version 2.0 -->
<!-- 29/Oct/2017 -->
<!-- code contributor: Alex -->

<!-- Include header_html.php to inject project banner and navigation. -->
<?php include "php/header_html.php"; ?>

    <main>
      <!-- main content -->
      <!-- Add Product to the product list: Form -->
      <!-- Remove Product from the product list : Drop Down list form and delect the row of the records of the database -->
      <!-- Account Setting section -->
      <!-- Part 1 - include remove user from the database -->
      <!-- Part 2 - include remove staff from  the database -->
      </main>

<!-- include footer_html.php to inject footer html to the project index page. -->
    <?php include "php/footer_html.php"; ?>

  </div>
</body>
</html>
