<?php


  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apothecare - Over ons</title>
    <link rel="stylesheet" href="../assets/css/main.css?v=3" />
    <link
      rel="shortcut icon"
      type="x-icon"
      href="../assets/images/logo/Apothecare-minilogo-nobg.png"
    />
    <!-- Dit is voor de font-->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
<!-- header -->
    <header>
      <div class="logo">
        <a href="../index.php"><img src="../assets/images/logo/apothecare-nobg.png" alt="Logo"></a>
      </div>

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

<!-- Main body -->
    <div class="over-ons-container">
      <div class="over-photo">
        <img src="../assets/images/over-ons-foto.png" alt="ApotheCare medewerker">
        <div class="over-btn-container over-btn-desktop">
          <a href="producten.php" class="over-btn">Bekijk Producten</a>
        </div>
      </div>

      <div class="content-over">
        <div class="blok-over">
          <h2>Onze Geschiedenis</h2>
          <p>
            ApotheCare werd opgericht in 1893 toen dokter Cornelis Pillenius vond dat pillen kopen eenvoudiger moest worden.
            Wat begon als een stoffig kastje vol mysterieuze poeders, groeide uit tot een digitale apotheek voor iedereen.
          </p>
        </div>
        <div class="blok-over">
          <h2>Onze Doelen</h2>
          <p>
            Wij willen een wereld waarin je je medicijnen snel, duidelijk en zonder stress kunt regelen.
            Of het nou om een simpele pijnstiller gaat of een pil tegen je schoonmoederhoofdpijn — wij staan klaar.
          </p>
        </div>
        <div class="blok-over">
          <h2>Meer Uitleg</h2>
          <p>
            ApotheCare maakt gebruik van moderne technologie om medicatie makkelijk bereikbaar te maken.
            Geen lange wachttijden of onduidelijke etiketten — gewoon duidelijk, snel en veilig. 
          </p>
        </div>
        <div class="over-btn-container over-btn-mobile">
          <a href="producten.php" class="over-btn">Bekijk Producten</a>
        </div>
      </div>
    </div>
  </body>
  <script src="../assets/js/main.js"></script>
</html>
