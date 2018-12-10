 <head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Michael Krøyserth-Simsø">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="wrapper">
      <h1>Community <br>Science Museum</h1>
      <p class="main_header__subheading">Exlore together</p>
    </div>
    <a class="skip-main" href="#maincontent">Skip to main content</a>
  </header>
  <nav class="main-navigation" role="navigation">
    <button class="main-navigation__button" id="toggle" aria-expanded="false" aria-controls="menu">
      <!-- <span class="close-icon">×</span> -->
      <span class="main-navigation__burger-icon">&#x2630;</span>
      <span class="main-navigation__text">
        Menu
      </span>
    </button>
    <ul class="main-navigation__list pt-15" id="menu">
      <li class="main-navigation__item"><a href="./">Home</a></li>
      <li class="main-navigation__item"><a href="./explore.html">Explore</a></li>
      <li class="main-navigation__item"><a href="./exhibitions.html">Exhibitions</a></li>
      <li class="main-navigation__item"><a href="./about.html">About Us</a></li>
      <li class="main-navigation__item"><a href="./involved.html">Get Involved</a></li>
    </ul>
  </nav>
  <div class="background"></div>
  <main class="wrapper">
    <section class="contact-sent">
      <h2>Message Sent!</h2>
      <p>Thank You<?php echo " " . $_POST["name"]; ?>! Your email has bee sent.</p>
      <p>A response will be sent to your email<?php echo " " . $_POST["email"];?>.</p>
    </section>
  </main>
    <footer class="main-footer">
      <section class="main-footer__mobile wrapper p-10">
        <h2>We hope to see you</h2>
        <div class="main-footer__social-mobile">
          <img src="img/svg/facebook.svg" alt="facebook logo">
          <img src="img/svg/twitter.svg" alt="twitter logo">
          <img src="img/svg/location.svg" alt="location icon">
        </div>
        <div class="main-footer__links-mobile mb-15">
          <a href="./contact.html">Birthday?</a>
          <a href="/">Contact</a>
          <a href="/">Work</a>
          <a href="/">Opening hours</a>
          <a href="/">Learn</a>
        </div>
      </section>
      <section class="hide-small">
        <div>
          <h3>What else do we offer?</h3>
          <ul>
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
            <li>Four</li>
            <li>Five</li>
          </ul>
        </div>
        <div>
          <h2>Work, research or study</h2>
          <ul>
            <li>Contact us</li>
            <li>Birthay?</li>
            <li>Work</li>
            <li>Opening hours</li>
            <li>Learn</li>
          </ul>
        </div>
        <div>
          <h2>Get in touch</h2>
        </div>
      </section>
    </footer>
    <script>
      var toggle = document.querySelector('#toggle');
      var menu = document.querySelector('.main-navigation__list');

      toggle.addEventListener('click', function () {
        if (menu.classList.contains('is-active')) {
          this.setAttribute('aria-expanded', 'false');
          menu.classList.remove('is-active');
        } else {
          menu.classList.add('is-active');
          this.setAttribute('aria-expanded', 'true');
        }
      });
    </script>
  </body>