<?php require('panel/registracija.php');
if(isset($_SESSION['korisnik_sesija'])) { echo '<script>window.location="panel/index.php"</script>'; return true; } ?>
<?php require('header-signup.php'); ?>

  <!-- Signup Section  -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="registerForm">
		<form action="" method="POST" class="login">
            <h1>Register</h1>
			<div>
				<input type="text" placeholder="Ime i prezime" name='korisnik'  required>
			</div>
      <div>
				<input type="text" placeholder="Email" name='email'  required>
			</div>
			<div>
			<input type="password" placeholder="Šifra" name="sifra" required minlength="6">
            </div>
            <div>
				<input type="password" placeholder="Ponovite unos šifre" name="rsifra" required minglength="6">
			</div>
			<div>
				<button name="submit">Registrujte se</button>
			</div>
			<p>Imaš račun? <a href="login.php">Prijavi se</a>.</p>
		</form>
	</div>

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
            <h2>Irac Rudarska, Tuzla 75000</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

 <?php
    include_once 'footer.php';
 ?> 