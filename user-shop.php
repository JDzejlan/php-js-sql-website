<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narudžba </title>
    <link rel="stylesheet" href="shop.css">
    <script defer src="korpa.js"></script>
</head>
<body>

<?php include 'konekcija/conn.php'; 
    require('shopUser-header.php');
    ?>
    <section id="narudzbaa">
    <div class="narudzba container">
      <div>
        <h1>NARUDŽBA</h1>
      </div>
    </div>
  </section>
    <form method="post" action="send-email.php" class="form-container">
      
        <label for="firstname">Ime i prezime:</label>
        <input type="text" id="firstname" name="firstname" required placeholder="Unesite ime i prezime">

        <label for="lastname">Adresa prebivališta:</label>
        <input type="text" id="adresa" name="adresa" placeholder="Unesite vašu adresu" required>

        <label for="email">E-mail adresa:</label>
        <input type="email" id="email" name="email" placeholder="Unesite vašu e-mail adresu" required>
        

        <label for="brojTelefona" id="brojTelefona" name="broj">Broj telefona</label>
        <div style="display: flex;">
            <select id="countryCode" name="brojTelefona">
                <option value="+387">+387 (BiH)</option>
                    <option value="+385">+385 (HRV)</option>
                    <option value="+382">+382 (CG)</option>
                    <option value="+381">+381 (SRB)</option>

        </select>
        <input type="text" name="brojTelefona" id="phoneNumber" placeholder="Unesite broj telefona" required>
        </div>
        <text id="izaberiproizvode" class="tekstproiz">Izaberi proizvode :</text>
       
        <?php
        // Izvlačenje proizvoda iz baze podataka
        $sql = "SELECT ProizvodID, ime_proizvoda, cijena_proizvoda, image_url FROM proizvodi";
        $result = $db->query($sql);

        // Provera da li ima rezultata
        if ($result->num_rows > 0) {
            // Prolazak kroz rezultate i generisanje HTML-a za svaki proizvod
            while ($row = $result->fetch_assoc()) {
                $product_name = htmlspecialchars($row["ime_proizvoda"], ENT_QUOTES, 'UTF-8');
                echo '<div class="form-group">';
                echo '<label class="custom-checkbox">';
                echo '<input type="checkbox" name="product[]" value="' . $row["ProizvodID"] . '" data-price="' . $row["cijena_proizvoda"] . '">';
                echo $product_name;
                echo '<span class="checkmark"></span>';
                echo '</label>';
                echo '<img src="' . $row["image_url"] . '" alt="' . $product_name . ' Image" class="product-image">';
                echo '<p>Cijena(kom): <strong>' . $row["cijena_proizvoda"] . ' KM</strong></p>';
                echo '<input type="number" name="quantity' . $row["ProizvodID"] . '" min="0" placeholder="Količina" step="1">';
                echo '</div>';
            }
        } else {
            echo "Nema proizvoda dostupnih.";
        }
        ?>
        
   
        <br>
        
        <div id="totalprice" style="font-weight: bold;">
    Ukupna cijena: 0 KM
</div>
        <button type="submit" id="submit">Pošalji</button>
    </form>
   
    <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontakt info </h1>
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
    
</body>
</html>
