<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Michael Krøyserth-Simsø">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="theme-color" content="#39abe0" />
  <title>Community Science Museum</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="manifest" href="/manifest.json">
  <script>
    document.getElementsByTagName('html')[0].classList.add('js');
  </script>
</head>
<body>
<header class="main_header">
  <div tabindex="0" class="wrapper">
    <h1>Community <span>Science Museum</span></h1>
    <p class="main_header__subheading">Exlore together</p>
  </div>
  <a class="skip-main" href="#maincontent">Skip to main content</a>
</header>
<nav class="main-navigation">
  <button class="main-navigation__button" id="toggle" aria-expanded="false" aria-controls="menu">
    <span class="main-navigation__burger-icon">&#x2630;</span>
    <span class="main-navigation__text">
      Menu
    </span>
  </button>
  <div class="nav-wrapper">
    <ul class="main-navigation__list pt-15" id="menu">
      <li class="main-navigation__item"><a href="./">Home</a></li>
      <li class="main-navigation__item"><a href="./explore.html">Explore</a></li>
      <li class="main-navigation__item"><a href="./exhibitions.html">Exhibitions</a></li>
      <li class="main-navigation__item"><a href="./about.html">About Us</a></li>
      <li class="main-navigation__item current"><a href="./involved.html">Get Involved</a></li>
    </ul>
  </div>
</nav>
  <!-- <div class="background"></div> -->
  <main class="wrapper">
    <section class="contact-sent">
      <h2>Message Sent!</h2>
      <p>Thank You<?php echo " " . $_POST["name"]; ?>! Your email has bee sent.</p>
      <p>A response will be sent to your email<?php echo " " . $_POST["email"];?>.</p>
    </section>
  </main>
<footer class="main-footer">
  <h2>We hope to see you</h2>
  <section class="main-footer__mobile wrapper p-10">
    <div class="main-footer__social-mobile">
      <img src="img/svg/facebook.svg" alt="facebook logo">
      <img src="img/svg/twitter.svg" alt="twitter logo">
      <img src="img/svg/location.svg" alt="location icon">
    </div>
    <div class="main-footer__links-mobile mb-15">
      <a href="./contact.html">Birthday?</a>
      <a href="./contact.html">Contact</a>
      <a href="./explore.html#reseachers">Work</a>
      <a href="./about.html#opening-hours">Opening hours</a>
      <a href="./explore.html#kids-learn">Learn</a>
    </div>
  </section>
  <section class="main-footer__md hide-small wrapper">
    <div class="main-footer__offer">
      <h3>What else do we offer?</h3>
      <ul>
        <li><a href="./contact.html">Spend your birthday with us?</a></li>
        <li><a href="./about.html#vision">Read about our vision</a></li>
      </ul>
    </div>
    <div class="main-footer__activity">
      <h3>Work, research or study</h3>
      <ul>
        <li><a href="./contact.html">Contact us</a></li>
        <li><a href="./explore.html#reseachers">Do your research with us? </a></li>
        <li><a href="./about.html#opening-hours">When are we open?</a></li>
        <li><a href="./explore.html#kids-learn">Learn with us</a></li>
      </ul>
    </div>
    <div class="main-footer__social">
      <h3>Get in touch thorugh social media</h3>
      <img src="img/svg/facebook.svg" alt="facebook logo">
      <img src="img/svg/twitter.svg" alt="twitter logo">
      <img src="img/svg/location.svg" alt="location icon">
    </div>
  </section>
</footer>
<script>
  var toggle = document.querySelector('#toggle');
  var menu = document.querySelector('.main-navigation__list');
  var hamburgerIcon = document.querySelector('.main-navigation__burger-icon');

  toggle.addEventListener('click', function () {
    if (menu.classList.contains('is-active')) {
      this.setAttribute('aria-expanded', 'false');
      menu.classList.remove('is-active');
      hamburgerIcon.innerText = '\u2630';
    } else {
      menu.classList.add('is-active');
      this.setAttribute('aria-expanded', 'true');
      hamburgerIcon.innerText = '\u00D7';
    }
  });
</script>
</body>
</html>