<?php 
session_start(); // pokrece sesiju
//require_once("konekcija/conn.php");  // putanja do conn.php fajla


if (isset($_POST['korisnik'])) {    
    // Ako je unesen username, ako je ispunjen uslov if statmenta izvrsava se kod ispod
    $username = $_POST['korisnik'];  
    // Dohvata username POST metodom i sprema u varijablu $username
    $password = $_POST['sifra'];    
    // Dohvata password POST metodom i sprema u varijablu $password

    $sql = "SELECT * FROM registrovani WHERE korisnik='$username' AND sifra ='$password'"; 
    // $sql je varijabla u koju smo spremili upit
    $rezultat = mysqli_query($db, $sql);  
    // $rezultat je varijabla koja salje upit u bazu

    if ($rezultat !== false) {
        if (mysqli_num_rows($rezultat) == 1) {
            // Putem funkcije mysqli_query
            $row = mysqli_fetch_assoc($rezultat); 
            // $db se odnosi na naziv nase databaze, $sql je ranije spremljen
            $_SESSION['korisnik_sesija'] = $row['korisnik']; 
            // Upit u varijablu, upite mozemo izvrsavat i direktno
            echo'<script>window.location="panel/index.php";</script>'; 
            return true;
        } else {
            // Zatim pozivanjem iste
            echo "<script>alert('Netačan username ili šifra.')</script>"; 
            return true;
            // Uslov u if statmentu jeste mysqlu_num_rows za prethodni upit
            // Odnosno, vraca nam kompletan red od korisnika koji se prijavljuje
        }
    } else { 
        die("Query failed: " . mysqli_error($db));
    }

// mysqli_fetch_assoc nam je upit u databazu koji vraca odredjenu kolonu iz reda, odredjenu vrijednost u ovom slucaju korisnik, sto zapravo
// predstavlja username, koji se zatim sprema u sesiju, odnosno na osnovu username se kreira i starta sesija te nas redirecta na index.php
// odnosno panel/php koja predstavlja pocetnu stranicu od panel a ukoliko ne pronadje unesene podatke u db vraca nam alert, odnosno izvrsava se
// else

// echo sluzi za ispis, pomocu istog mozemo vratiti neku stranicu, odraditi ispis i slicno, slican print samo sto posjeduje dosta vise mogucnosti

}







?>																					