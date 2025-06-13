<?php 
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apothecare - Login</title>
    <link rel="stylesheet" href="../assets/css/main.css?v=3" />
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo/Apothecare-minilogo-nobg.png">
    <!-- Dit is voor de font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
  </head>
  <body class="login-page">
<!-- account aangemaakt popup -->
 <?php
 
 if(isset($_GET["error"])) {
  if ($_GET["error"] == "none"){
    echo "<div class='popup'>
          <p> ✅ Account succesvol aangemaakt! Log nu in. </p>
          </div>";
  } else if ($_GET["error"] == "wrongWay") {
    echo "<div class='popup2'>
          <p> 🕵️‍♂️ Je probeert een geheime plek te bezoeken... maar je hebt geen toegang. </p>
          </div>";
  } else if ($_GET["error"] == "wrongLogin") {
    echo "<div class='popup2'>
          <p> 🚫 Verkeerde email of wachtwoord probeer opnieuw </p>
          </div>";
  } else if ($_GET["error"] == "uitgelogd") {
    echo "<div class='popup'>
          <p> ✅ Succesvol uitgelogd!</p>
          </div>";
  }
}

 ?>
<!-- header -->
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
         <a href="<?php echo (isset($_SESSION['userid']) && $_SESSION['userid'] == true) ? 'account.php' : 'register.php'; ?>" aria-label="User Account">
           <?php if (isset($_SESSION['userid']) && $_SESSION['userid'] == true): ?>
             <img src="../assets/images/icons/user-found.svg" alt="user">
           <?php else: ?>
             <img src="../assets/images/icons/user-plus.svg" alt="user">
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
         <a href="<?php echo (isset($_SESSION['userid']) && $_SESSION['userid'] == true) ? 'account.php' : 'register.php'; ?>">
           <?php if (isset($_SESSION['userid']) && $_SESSION['userid'] == true): ?>
             <img src="../assets/images/icons/user-found.svg" alt="user">
           <?php else: ?>
             <img src="../assets/images/icons/user-plus-wit.svg" alt="user">
           <?php endif; ?>
         </a>
       </div>
     </div>
   </header>
<!-- main body -->
    <div class="container1">
      <div class="login-box">
        <div id="imglogo">
          <a href="../index.php"><img src="../assets/images/logo/apothecare-nobg.png" alt="logopng"></a>
        </div>

        <form action="components/login.inc.php" method="POST">
          <label for="email">E-mail</label>
          <input type="email" name="email" placeholder="Voer uw e-mail in" required />

          <div class="passwd-wrap">
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="ww" placeholder="Voer uw wachtwoord in" required>
            <button type="button" id="show-password">
              <img id="eye" src="../assets/images/icons/eye-show.svg" />
            </button>
          </div>

          <p class="forgot">Forgot password?</p>

          <button type="submit" name="login" class="login-button">Login</button>
        </form>
        <p class="signup">
          Heb je geen account?
          <a href="register.php"><span class="free">Registreer nu gratis</span>!</a>
        </p>
      </div>
    </div>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
