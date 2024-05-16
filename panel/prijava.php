<?php 
session_start(); // pokrece sesiju
//require_once("konekcija/conn.php");  // putanja do conn.php fajla


if (isset($_POST['korisnik'])) {   
    $username = $_POST['korisnik'];  
    $password = $_POST['sifra'];    

    $sql = "SELECT * FROM registrovani WHERE korisnik='$username' AND sifra ='$password'"; 
    $rezultat = mysqli_query($db, $sql);  

    if ($rezultat !== false) {
        if (mysqli_num_rows($rezultat) == 1) {
            $row = mysqli_fetch_assoc($rezultat); 
            $_SESSION['korisnik_sesija'] = $row['korisnik']; 
            echo'<script>window.location="panel/index.php";</script>'; 
            return true;
        } else {
            echo "<script>alert('Netačan username ili šifra.')</script>"; 
            return true;
        }
    } else { 
        die("Query failed: " . mysqli_error($db));
    }


}

?>																					