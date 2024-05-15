<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">

</head>
<body>
    
</body>
</html>
<?php
$name = $_POST["firstname"];
$email = $_POST["email"];
$products = ""; 
$defaultSubject = "Nova narudžba";

$subject = isset($_POST["subject"]) ? $_POST["subject"] : $defaultSubject;
$brojTelefona = $_POST["phoneNumber"];
$countryCode = $_POST["countryCode"];
$adresa = $_POST["adresa"];

// Spajanje državnog koda i broja telefona
$telefon = $countryCode . $brojTelefona;


// Provjeravamo da li su označeni proizvodi niz
if (isset($_POST['product']) && is_array($_POST['product'])) {
    // Otvaranje konekcije sa bazom podataka
    require "konekcija/conn.php";

    // Inicijalizujemo ukupnu cijenu
    $totalPrice = 0;

    // Iteriramo kroz niz označenih proizvoda
    foreach ($_POST['product'] as $productId) {
        // Dohvatamo količinu za trenutni proizvod
        $quantityKey = 'quantity' . $productId;
        $quantity = $_POST[$quantityKey] ?? 0;

        // Provjeravamo da li je količina validna - brojčana vrijednost
        if (!is_numeric($quantity)) {
            // Preskačemo trenutni proizvod ako količina nije validna
            continue;
        }

        // Izvršavamo upit u bazu podataka kako bismo dohvatili ime i cijenu proizvoda na osnovu ID-a
        $sql = "SELECT ime_proizvoda, cijena_proizvoda FROM proizvodi WHERE ProizvodID = $productId";
        $result = $db->query($sql);

        // Provjeravamo da li je rezultat upita uspješan
        if ($result->num_rows > 0) {
            // Dohvatamo podatke o proizvodu
            $row = $result->fetch_assoc();
            $productName = $row['ime_proizvoda'];
            $productPrice = $row['cijena_proizvoda'];

            // Dodajemo ime proizvoda i količinu u string
            $products .= "$productName (Količina: $quantity), ";

            // Dodajemo cijenu proizvoda pomnoženu sa količinom na ukupnu cijenu
            $totalPrice += $productPrice * $quantity;
        }
    }

    // Zatvaranje konekcije sa bazom podataka
    $db->close();

    // Uklanjamo posljednji zarez i razmak iz stringa
    $products = rtrim($products, ", ");
} else {
    // Ako nisu označeni proizvodi, postavljamo odgovarajuću poruku
    $products = "Nema odabranih proizvoda.";
    // Postavljamo ukupnu cijenu na 0
    $totalPrice = 0;
}

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'live.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'api';
$mail->Password = '8e0d2912166b09ccfb3d84d47699db79';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('mailtrap@demomailtrap.com', 'Korisnik');
$mail->addAddress('jahicplast@gmail.com', 'Firma');

$mail->Subject = $subject;

$mail->CharSet = 'UTF-8';


$mail->Body = "Email: $email\nOdabrani proizvodi: $products\nUkupna cijena: $totalPrice KM\nBroj telefona: $telefon\nAdresa: $adresa";

try {
    $mail->send();
    
    echo '<div id="success-message">Narudžba je uspješno poslana! Uskoro će Vas kontaktirati korisnička služba za potvrdu narudžbe!</div>';
        // Dodajemo JavaScript kod za automatsko preusmjeravanje nakon 3 sekunde
    echo '<script>
            setTimeout(function() {
                window.location.href = "panel/user.php";
            }, 3000); // 3000 milisekundi = 3 sekunde
          </script>';
} catch (Exception $e) {
    echo "Narudžba nije mogla biti poslata. Pokušajte ponovo! Greška: {$mail->ErrorInfo}";
}

?>
