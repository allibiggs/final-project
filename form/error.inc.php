<header>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;800;900&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/a07d260820.js" crossorigin="anonymous"></script>
  <script src="scripts/scripts.js" type="text/javascript"></script>
</header>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">How It Works</a>
  <a href="#">Cookies</a>
  <a href="#">About</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()"><i class="fas fa-minus"></i></span>

  <div id="main">
    <header>
      <img class="logo" src="images/mfc-logo.png" alt="Matt's Fat Cookies"/>
    </header>

    <main class="thank-you">

      <h1>Thanks for contacting us!</h1>
      <p>We'll get back to you as soon as we can.</p>
    </main>


<footer>
  <a class="contact" href="#">Contact</a>

  <a href="https://instagram.com/mattsfatcookies" target="_blank"><i class="fab fa-instagram"></i></a>
</footer>
</div>


<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
