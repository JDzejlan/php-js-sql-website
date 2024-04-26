<?php 
require('konekcija/conn.php');
require('panel/prijava.php');
require('header-signup.php');
?>

  <!-- Login Section  -->


  <body>
	<div class="login">
		<form action="" method="POST">
    <h1>Prijavite se</h1> 
			<div>
				<input type="text" placeholder="Username" name='korisnik' required>
			</div>
			<div>
				<input type="password" placeholder="Password" name='sifra' required>
			</div>
			<div>
      <button name="submit">Prijavite se</button>
			</div>
			<p>Nemaš račun?<a href="signup.php"> Registruj se</a>.</p>
		</form>
	</div>
   
  
  <!-- End Login Section  -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontakt <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@jahicplast.ba</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Adresa</h1>
            <h2>Irac Rudarska 73, Tuzla 75000</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
 
 <?php
    include_once 'footer.php';
 ?>