<!-- HEADER -->
<?php 
$title = "Contact";
$style = [
  './assets/css/style.css',
  './contact.css',
];

include('./layout/header.php') 
?>

<!-- MAIN -->
<body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Get in touch!</h3>
          <p class="text">
            Ada pepatah mengatakan, "Tak Kenal Maka Tak Sayang". Ayo kita berkenalan!
          </p>

          <div class="info">
            <div class="information">
              <div class="address">
                <i class="fas fa-street-view"></i>
                <p>Depok, Indonesia</p>
              </div>
            </div>
            <div class="information">
              <div class="email">
                <i class="far fa-envelope"></i>
                <p>codecourse@gmail.com</p>
              </div>
            </div>
            <div class="information">
              <div class="phone">
                <i class="fas fa-mobile-alt"></i>
                <p>0838-7976-5775</p>
              </div>
            </div>
          </div>

          <div class="social-media">
            <p>Social Media :</p>
            <div class="social-icons">
              <a href="www.facebook.com">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="www.twitter.com">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="www.instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="www.linkedin.com">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="https://formsubmit.co/ramaalfin7@gmail.com" method="POST">
            <!-- Honeypot -->
            <input type="text" name="_honey" style="display: none;">

            <!-- Disable Captcha -->
            <input type="hidden" name="_captcha" value="false">

            <input type="hidden" name="_next" value="https://ramaalfin.github.io/web-tugas/success.html">
            <h3 class="title">Contact me</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="Username" />
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email" />
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone" />
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
            </div>
            <input type="submit" value="Send" class="button" />
          </form>
        </div>
      </div>
    </div>

  </body>

<!-- FOOTER -->
<?php include("./layout/footer.php"); ?>