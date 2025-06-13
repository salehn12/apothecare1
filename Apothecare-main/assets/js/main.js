// menu opener/closer header
function toggleMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  const chatBot = document.getElementById('chatBot');

  menu.classList.toggle('active');

  if (menu.classList.contains('active')) {
      if (chatBot) chatBot.style.display = 'none';
  } else {
      if (chatBot) chatBot.style.display = 'block';
  }
}

// sluit menu bij klikken op een link
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
          const menu = document.getElementById('mobileMenu');
          const chatBot = document.getElementById('chatBot');

          menu.classList.remove('active');
          if (chatBot) chatBot.style.display = 'block';
      });
  });
});

  // Controleer of de popup zichtbaar is
  window.onload = function() {
    // Wacht 10 seconden en verberg de popup
    setTimeout(function() {
      const popup = document.querySelector('.popup');
      if (popup) {
        popup.style.display = 'none';
      }
    }, 8000); // 8 seconden
  }
// hiermee check ik of het ingevulde wachtwoord hetzelfde is als die daarboven
function checkPassword(event) {
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("againpassword").value;

  if (password !== confirmPassword) {
      alert("Wachtwoorden komen niet overeen!");
      event.preventDefault(); // Voorkomt dat het formulier wordt verzonden
  }
}

// Zorg dat het script pas wordt uitgevoerd als de pagina is geladen
document.addEventListener("DOMContentLoaded", function () {
  let form = document.querySelector("form");
  if (form) {
      form.addEventListener("submit", checkPassword);
  } else {
      console.error("Formulier niet gevonden!");
  }
});

// Zorgt ervoor dat het wachtwoord voldoet aan de vereisten
function validatePassword(event) {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("againpassword").value;
  var errorMessage = "";

  // Controleer of het wachtwoord hetzelfde is
  if (password !== confirmPassword) {
      errorMessage += "Wachtwoorden komen niet overeen!\n";
  }

  // Controleer of het wachtwoord minstens 8 tekens lang is
  if (password.length < 8) {
      errorMessage += "Het wachtwoord moet minstens 8 tekens lang zijn.\n";
  }

  // Controleer of het wachtwoord een speciaal teken bevat
  var specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;
  if (!specialCharPattern.test(password)) {
      errorMessage += "Het wachtwoord moet minstens één speciaal teken bevatten.\n";
  }

  // Als er een fout is, toon de foutmeldingen
  if (errorMessage) {
      alert(errorMessage);
      event.preventDefault(); // Voorkomt dat het formulier wordt verzonden
  }  
}

// Show password
const show_pw_btn = document.querySelector('#show-password');
const show_pw_icon = document.querySelector('#show-password img');
const pw_input = document.querySelector('#password');

show_pw_btn.addEventListener('click', () => {
  pw_input.type = pw_input.type === 'password' ? 'text' : 'password';

  const currentSrc = show_pw_icon.src;

  if (currentSrc.endsWith('eye-show.svg')) {
    show_pw_icon.src = '../assets/images/icons/eye-off.svg';
  } else {
    show_pw_icon.src = '../assets/images/icons/eye-show.svg';
  }
});