<?php


session_start();
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>apothedev - Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/main.css?v=3" />
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo/Apothedev-Logo-nobg.png" />
    <!-- Dit is voor de font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
  </head>
  <body>
<!-- header -->
    <header>
      <div class="logo">
        <a href="../index.php"><img src="../assets/images/logo/apothedev-nobg.png" alt="Logo"></a>
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

      <div class="menu-container">
        <div class="menu-icon">☰</div>
        <div class="menu-title">lorem ipsum dolor sit amet</div>
      </div>

      <div class="card-grid">
        <div class="card product-card">
          <img src="../assets/images/medicijnpakket.jpg" alt="Medicine package" />
        </div>

        <div class="card add-product-card">
          <div class="add-icon">
            <span>+</span>
          </div>
          <div class="add-text">Nieuwe product toevoegen</div>
        </div>
      </div>

      <div class="stats-card">
        <div class="stat-row">
          <div class="stat-label">Aantal orders</div>
          <div class="stat-value">1234</div>
        </div>

        <div class="stat-row">
          <div class="stat-label">Average reviews</div>
          <div class="stars">
            <div class="star">★</div>
            <div class="star">★</div>
            <div class="star">★</div>
            <div class="star">★</div>
          </div>
        </div>
      </div>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
