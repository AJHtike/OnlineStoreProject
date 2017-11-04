<!-- about.php page -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a page that display the company informations and about the products history. -->
<!-- Version 2.0 -->
<!-- 3/Nov/2017 -->
<!-- code contributor: Alex -->

<!-- Include header_html.php to inject project banner and navigation. -->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Surf!n'buy | About </title>
<link rel="stylesheet" href="CSS/style.css"/>


<!-- Link references from W3C schools : https://www.w3schools.com/icons/ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<?php include "php/header_html.php"; ?>

    <main>
      <!-- main content -->
      <div class="about">
      <h1><q>Pinnacle of largest online store</q></h1>
    </div>
    <div class="about">
      <p>Surf’n’Buy is the largest sales and production vendors for Mobile phones, Tablets and Laptops.
        The company aiming to acheive number of online visitor to 1.5 millions in year 2018.The online shopping cart web application to buy reasonable price of good quality products and safe and secure check out to expand the company profit in 2017~2018.
        In addition, the company aimed to achieve world-wide customers and repeat orders.</p>
        <div>
        <div>
        <?php echo '<button class="btnView"><i class="fa fa-arrow" aria-hidden="true"></i> <a href="index.php">Back to Shop</a></button>';?>
      </div>
    </main>


<!-- include footer_html.php to inject footer html to the project index page. -->
    <?php include "php/footer_html.php"; ?>

  </div>
</body>
</html>
