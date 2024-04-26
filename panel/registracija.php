<?php
require('konekcija/conn.php');
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['korisnik'];
    $email = $_POST['email'];
    $password = $_POST['sifra'];
    $rpassword = $_POST['rsifra'];

    if ($password == $rpassword) {
        $sql_check_username = "SELECT * FROM registrovani WHERE korisnik ='$username'";
        $query_check_username = mysqli_query($db, $sql_check_username);

        if ($query_check_username) {
            if (mysqli_num_rows($query_check_username) == 0) {
                $sql_insert_user = "INSERT INTO registrovani (korisnik, email, sifra, admin) VALUES ('$username', '$email', '$password', 0)";

                $query_insert_user = mysqli_query($db, $sql_insert_user);

                if ($query_insert_user) {
                    $_SESSION['korisnik_sesija'] = $username;
                    echo '<script>window.location="panel/index.php";</script>';
                    return true;
                } else {
                    die("Query failed: " . mysqli_error($db));
                }
            } else {
                echo "<script>alert('Taj username vec postoji u databazi')</script>";
            }
        } else {
            echo "<script>alert('Pokusajte ponovo!')</script>";
        }
    } else {
        echo "<script>alert('Sifre se ne podudaraju')</script>";
    }
}
?>
