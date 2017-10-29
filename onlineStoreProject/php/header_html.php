<!-- header_html.php -->
<!-- Php files that embeded html and front end page for banner which consists of Company Logo, and main navigation links. -->
<!-- version 1.0 -->
<!-- 29/Oct/2017 -->
<!-- Code by Alex Htike -->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Surf!n'buy | pinnacle of largest online store</title>
<link rel="stylesheet" href="CSS/style.css"/>
<!-- Link references from W3C schools : https://www.w3schools.com/icons/ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
  <div class="wrapper">

    <header>
      <!-- header contnent -->
      <!-- navigation menu -->
      <!-- Include navigation_html.php to inject navigation html to the project banner page. -->

      <?php include "navigation_html.php"; ?>
      <div class="logo">
        <img src="img/logo.png" alt="companylogo"/>
      </div>
    </header>
