<?php

 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apothecare - Register</title>
    <link rel="stylesheet" href="../assets/css/main.css?v=3" />
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo/Apothecare-minilogo-nobg.png">
    <!-- Dit is voor de font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
</head>
<body class="login-page">
    <header class="login-header">

      <nav>
        <ul>
          <li><a href="producten.php">Producten</a></li>
          <li><a href="over.php">Over ons</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

      <div class="icons">
        <div class="cart">
          <a href="winkelwagen.php">
            <img src="../assets/images/icons/cart.svg" alt="Cart Icon">
          </a>
        </div>
        <div class="profile">
          <a href="<?php echo (isset($_SESSION['userid']) && $_SESSION['userid'] == true) ? 'account.php' : 'login.php'; ?>" aria-label="User Account">
            <?php if (isset($_SESSION['userid']) && $_SESSION['userid'] == true): ?>
              <img src="../assets/images/icons/user-found.svg" alt="user">
            <?php else: ?>
              <img src="../assets/images/icons/user.svg" alt="user">
            <?php endif; ?>
          </a>
        </div>
      </div>

<!-- Menu Icon voor mobiel -->
      <div class="menu-icon" onclick="toggleMobileMenu()">
        <img src="../assets/images/icons/menu.png" alt="Menu Icon">
      </div>

<!-- Mobiel menu overlay -->
      <div class="mobile-menu" id="mobileMenu">
        <div class="close-menu" onclick="toggleMobileMenu()">
          <img src="../assets/images/icons/close.png" alt="Sluit menu">
        </div>
      <ul class="mobile-links">
          <li><a href="producten.php">Producten</a></li>
          <li><a href="over.php">Over ons</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="mobile-icons">
          <a href="winkelwagen.php"><img src="../assets/images/icons/cart-wit.svg" alt="Cart Icon"></a>
          <a href="<?php echo (isset($_SESSION['userid']) && $_SESSION['userid'] == true) ? 'account.php' : 'login.php'; ?>">
            <?php if (isset($_SESSION['userid']) && $_SESSION['userid'] == true): ?>
              <img src="../assets/images/icons/user-found.svg" alt="user">
            <?php else: ?>
              <img src="../assets/images/icons/user-wit.svg" alt="user">
            <?php endif; ?>
          </a>
        </div>
      </div>
    </header>

    <?php
    // error berichten 
    if(isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput"){
        echo "<div class='popup2'>
              <p> ⚠️ Niet alle velden zijn ingevuld. Vul alles in of neem contact met ons op. </p>
              </div>";
      } else if ($_GET["error"] == "invaidemail") {
        echo "<div class='popup2'>
              <p> ⚠️ Ongeldig e-mailadres. Controleer of je het juist hebt ingevuld. </p>
              </div>";
      } else if ($_GET["error"] == "wwnietzelfde") {
        echo "<div class='popup2'>
              <p> 🔐 Wachtwoorden zijn niet hetzelfde. Controleer beide velden. </p>
              </div>";
      } else if ($_GET["error"] == "emailTaken") {
        echo "<div class='popup2'>
              <p> ⚠️ Dit e-mailadres is al in gebruik. Probeer een ander e-mailadres. </p>
              </div>";
      } else if ($_GET["error"] == "stmtfailed") {
        echo "<div class='popup2'>
              <p> 🛠️ Oeps! Er ging iets fout bij het verwerken. Probeer het nog eens. </p>
              </div>";
      } else if ($_GET["error"] == "wrongWay") {
        echo "<div class='popup2'>
              <p> 🕵️‍♂️ Je probeert een geheime plek te bezoeken... maar je hebt geen toegang. </p>
              </div>";
      }
    }
  
    ?>

    <div class="container1">
        <div class="login-box">
            <a href="login.php"><img src="../assets/images/icons/back.svg"></a>
            <div id="imglogo">
                <a href="../index.php"><img src="../assets/images/logo/apothecare-nobg.png" alt="logopng"></a>
            </div>

            <form action="components/register.inc.php" method="POST">  

                <label for="firstname">Voornaam</label>
                <input type="text" name="voornaam" placeholder="Voer uw naam in" required>

                <label for="firstname">Tussenvoegsel</label>
                <input type="text" name="tussenv" placeholder="Voer uw tussenvoegsel in">

                <label for="lastname">Achternaam</label>
                <input type="text" name="achternaam" placeholder="Voer uw achternaam in" required>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Voer uw e-mail in" required>

                <div class="passwd-wrap">
                <label for="password">Wachtwoord</label>
                <ul class="wachtwoordregels"> <li>Wachtwoord moet minimaal 8 karakters bevatten.</li><li>Met minstens 1 Speciaal teken.</li><li>Met minstens 1 letter en cijfer.</li></ul> 
                <input type="password" id="password" name="ww" placeholder="Voer uw wachtwoord in" minlength="8" pattern=".*[\d].*" pattern=".*[\W_].*" required>
                <button type="button" id="show-password">
                  <img id="eye" src="../assets/images/icons/eye-show.svg" />
                </button>
                </div>

                <label for="againpassword">Voer wachtwoord opnieuw in</label>
                <input type="password" name="wwrepeat" placeholder="Voer uw wachtwoord opnieuw in" minlength="8"  pattern="^(?=.*[a-zA-Z])(?=.*\d)(?=.*[\W_]).{8,}$" required>
                
                <p class="forgot">Wachtwoord vergeten?</p>
                <button type="submit" name="register" class="login-button" >Registreer nu</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../assets/js/main.js"></script>
</body>
</html>
