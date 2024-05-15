<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>JP Alu&PVC</title>
</head>
<?php session_start();
?>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>J</span>ahić <span>P</span>last</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href= 'panel/user.php' data-after="Home">Početna</a></li>
            <li><a href='panel/changepass-user.php' data-after="Contact">Promjena Šifre</a></li>
            <li><a href='panel/logout.php' data-after="Login">Odjavite se</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <script src="js/korpa.js"></script>

</body>
  </section>
  <!-- End Header -->
