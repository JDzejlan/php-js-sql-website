<?php
// Provjeri je li forma poslana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Učitaj parametre iz forme
    $brojProjekta = $_POST['brojProjekta'];
    $nazivProjekta = $_POST['nazivProjekta'];
    $opisProjekta = $_POST['opisProjekta'];
    $URL_slika = $_POST['URL_slika'];

    // Spoji se na bazu podataka
    $MYSQL_HOST = "localhost"; 
    $MYSQL_USER = "root";
    $MYSQL_PW = "";
    $MYSQL_DB = "jahicplast";

    $db = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);

    // Provjeri je li uspješno uspostavljena veza
    if (!$db) {
        die("Konekcija nije uspjela: " . mysqli_connect_error());
    }

    // Pripremi SQL upit za unos podataka
    $sql = "INSERT INTO projekti (Broj_projekta, Naziv_projekta, Opis_projekta, URL_slika)
    VALUES ('$brojProjekta', '$nazivProjekta', '$opisProjekta', '$URL_slika')";



if (mysqli_query($db, $sql)) {
    echo '<script>alert("Novi projekat uspješno dodan.");</script>';
    header("Location: index.php");
    exit;
} else {
    echo "Greška prilikom dodavanja projekta: " . mysqli_error($db);
}

    // Zatvori konekciju s bazom podataka
    mysqli_close($db);
}
?>
