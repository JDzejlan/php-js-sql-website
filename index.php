<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
  

<?php
    include_once 'header.php';
    require('konekcija/conn.php');
    
?>

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Jahić PLAST <span></span></h1>
        <h1>ALU & PVC <span></span></h1>
        <h1>Stolarija <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Us<span>lu</span>ge</h1>
        <p>Naša kompanija se ističe u proizvodnji visokokvalitetne aluminijumske (alu) i PVC stolarije, koristeći najnoviju tehnologiju i pažljivo odabrane materijale. Posvećeni smo pružanju personalizovanih rješenja za prozore, vrata i druge proizvode, savršeno prilagođene potrebama naših klijenata! </p>
      </div>
      <div class="service-bottom">
      <div class="service-item">
          <div class="icon"><img src="https://www.creativefabrica.com/wp-content/uploads/2021/03/22/Configuration-customize-icon-Graphics-9858324-1-1-580x386.jpg" /></div>
          <h2>Dizajn</h2>
          <p>Naš dizajn stolarije je spoj estetike i funkcionalnosti. Prilagodljivi prozori, vrata i fasadni sistemi odražavaju modernu eleganciju uz naglasak na energetskoj efikasnosti. Svaki komad je pažljivo oblikovan kako bi se uklopio u vaš stil i prostor, obezbjeđujući atraktivan vizuelni dojam i praktičnu upotrebu.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://dzs.gov.hr/userdocsimages//Slike%20za%20vijesti/Industrija%20vijest%20u%20travnju%202023.jpg?width=1500&height=1000&mode=max" /></div>
          <h2>Proizvodnja</h2>
          <p>Iskoristite vrhunsku ponudu naše stolarije koja obuhvata prozore, vrata i fasadne sisteme visokog kvaliteta. Naša posvećenost estetici, energetskoj efikasnosti i brzoj isporuci čini nas pouzdanim partnerom za poboljšanje vašeg prostora. Obratite se našem stručnom timu za personalizovane savjete i jednostavnu kupovinu. </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://www.adlibitum.hr/wp-content/uploads/2014/10/prodaja-adlibitum-1024x683.jpg" /></div>
          <h2>Prodaja</h2>
          <p>
Pružamo visokokvalitetne prozore i vrata prilagođene vašim potrebama. Sa punim sjajem garantujemo estetiku, energetsku efikasnost i brzu isporuku. Naš stručni tim stoji Vam na raspolaganju za personalizovane savjete i jednostavnu kupovinu. Transformišite svoj prostor i uđite uspješno u poslovanje sa nama. </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://montazanamjestaj.weebly.com/uploads/5/0/6/9/50698219/_5926901_orig.jpg" /></div>
          <h2>Montaža</h2>
          <p>Montaža aluminijske i PVC stolarije pruža besprijekoran spoj između kvaliteta i preciznosti. Naši iskusni tehničari brinu se o brzoj i efikasnoj instalaciji prozora, vrata i drugih proizvoda, obezbjeđujući siguran i trajan rezultat. Bez obzira na veličinu projekta, posvećeni smo pružanju visokog standarda. </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
<section id="projects">
  <div class="projects container">
    <div class="projects-header">
      <h1 class="section-title">Prethodni <span>Projekti</span></h1>
  </div>
    <div class="all-projects">
      <?php

      // SQL upit za dohvaćanje svih projekata
      $sql = "SELECT * FROM projekti";
      $result = mysqli_query($db, $sql);

      // Provjera rezultata i prikazivanje podataka
      if (mysqli_num_rows($result) > 0) {
          // Prikaz svakog projekta
          while($row = mysqli_fetch_assoc($result)) {
              echo '<div class="project-item">';
              echo '<div class="project-info">';
              echo '<h1>' . $row['Broj_projekta'] . '</h1>';
              echo '<h2>' . $row['Naziv_projekta'] . '</h2>';
              echo '<p>' . $row['Opis_projekta'] . '</p>';
              echo '</div>';
              echo '<div class="project-img">';
              echo '<img src="' . $row['URL_slika'] . '" alt="img">';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo "Nema dostupnih projekata.";
      }

      // Zatvaranje veze s bazom podataka
      mysqli_close($db);
      ?>
      <script src="../dodajProjekat.js"></script>
    </div>
  </div>
</section>
<!-- End Projects Section -->

  <!-- End Projects Section -->

  <!-- About Secti

  <!-About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="https://i.imgur.com/BgbRV6G.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">O <span>nama</span></h1>
        <h2>Jahić Plast d.o.o.</h2>
        <p>Proizvodnju Alu bravarije, PVC stolarije i ograda firma Jahić Plast d.o.o započela je početkom 2022.godine. 

          Radimo sa repromaterijalima već uspješnih i renomiranih kompanija kao što su: Profine, Kommerling, Winkhaus, Feal, Wurth, Reca, Urban, Termoglas.
          
          Vaša stolarija se radi po najvećim i najkvalitetnijim standardima.
          
          Mašine sa kojim radimo gotove proizvode su poznate Njemačke kompanije URBAN koja ima dugu tradiciju i iskustva sa mašinama za Alu i PVC stolariju.
          
           
          
          Jahić Plast d.o.o. svojim klijentima nudi: Prozorske sisteme (Kommerling i FEAL), vrata (Kommerling i FEAL), Roletne (VariNova), širok spektar dvorišnih i stubišnih ograda, garažna vrata i mnoge druge usluge.</p>
        <a href="#" class="cta">Vratite se na početak</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

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
 </head>
 <script defer src="korpa.js"></script>
 </body>
</html>