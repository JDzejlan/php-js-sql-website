<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brojProjekta = $_POST['brojProjekta'];
    $nazivProjekta = $_POST['nazivProjekta'];
    $opisProjekta = $_POST['opisProjekta'];
    $URL_slika = $_POST['URL_slika'];

    $MYSQL_HOST = "localhost"; 
    $MYSQL_USER = "root";
    $MYSQL_PW = "";
    $MYSQL_DB = "jahicplast";

    $db = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);

    if (!$db) {
        die("Konekcija nije uspjela: " . mysqli_connect_error());
    }


    $sql = "INSERT INTO projekti (Broj_projekta, Naziv_projekta, Opis_projekta, URL_slika)
    VALUES ('$brojProjekta', '$nazivProjekta', '$opisProjekta', '$URL_slika')";



if (mysqli_query($db, $sql)) {
    echo '<script>alert("Novi projekat uspješno dodan.");</script>';
    header("Location: index.php");
    exit;
} else {
    echo "Greška prilikom dodavanja projekta: " . mysqli_error($db);
}

    mysqli_close($db);
}
?>
