<?php
require('../konekcija/conn.php');
require('header.php');

error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

// Provjeri je li zahtjev za brisanje korisnika poslan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteUser'])) {
    // Dobavi korisničko ime korisnika koji se treba izbrisati
    $usernameToDelete = $_POST['deleteUser'];

    // Izvrši SQL upit za brisanje korisnika
    $deleteQuery = "DELETE FROM registrovani WHERE korisnik = '$usernameToDelete'";
    $deleteResult = mysqli_query($db, $deleteQuery);

    if ($deleteResult) {
        echo "<script>alert('Korisnik uspješno izbrisan.');</script>";
    } else {
        echo "<script>alert('Greška prilikom brisanja korisnika: " . mysqli_error($db) . "');</script>";
    }
}

// Dohvati sve korisnike
$query = "SELECT * FROM registrovani";
$result = mysqli_query($db, $query);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista korisnika</title>
    <style>
        /* Vaš CSS stil ostaje nepromijenjen */
        body {
            font-family: Arial, sans-serif;
            background: url("../img/hero-bg.png") no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding-top: 50px;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        h2 {
            color: white;
            margin-bottom: 20px;
            font-size: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
            background-color: #f9f9f9;
            font-size: 20px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <header>
        <h1>Lista korisnika</h1>
    </header>

    <?php
    if ($result) {
        echo "<form method='post'>";
        echo "<table>";
        echo "<tr><th>Username</th><th>Email</th><th>Password</th><th>Izbriši korisnika</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['korisnik'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['sifra'] . "</td>";
            echo "<td><button type='submit' name='deleteUser' value='" . $row['korisnik'] . "'>Izbriši korisnika</button></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</form>";
    } else {
        echo "Error executing the query: " . mysqli_error($db);
    }
    ?>

</body>

</html>
