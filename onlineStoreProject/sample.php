<!-- sample.html -->
<!-- ICT-286 Major Assignment -2 Online store (Group Project) -->
<!-- ** It is a template sample HTML5 which can be reusable as a design template between team member to construct web pages -->
<!-- Version 1.0 -->
<!-- code contributor: Alex, Dat -->
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
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </nav>
      <div class="logo">
        <img src="img/logo.png" alt="companylogo"/>
      </div>
    </header>



    <main>
      <!-- main content -->
      <!-- Whatever needed in the main content goes here!! -->


    </main>

    <aside>
      <!-- Vertical browsing links to each category -->
      <form action="php/index.php" method="post">
        <input type="text" name="txtSearch" size="50" placeholder="Search Your Product"/>
        <input type = "submit"  value = "Search" />
      </form>

      <nav>
      <ul>
        <li><a href="#">Laptop</a></li>
        <li><a href="#">Tablet</a></li>
        <li><a href="#">Mobile</a></li>
      </ul>
    </nav>
    </aside>

    <footer>
      <!-- footer content -->
      <div class="container">
      <section class="sitemap">SiteMap
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Log In</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </section>

      <section class="contact">Contact details
        <i class="fa fa-envelope"></i>
        <ul>
          <li><i class="fa fa-send"> : </i><a href="#"> abc@abc.com</a></li>
          <li><i class="fa fa-github"> : </i> <a href="#">github.com</a></li>
          <li><i class="fa fa-mobile"> : </i> <a href="#"> 123456</a></li>
          <li><i class="fa fa-map-marker"> : </i> <a href="#">Perth, WA</a></li>
        </ul>
      </section>


    </footer>

  </div>
</body>
</html>
