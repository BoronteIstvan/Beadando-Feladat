<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>

<script type="text/javascript">
   (function(){
      emailjs.init("oCys4xF5HLij_R46O");
   })();
</script>

    <script src="script.js"></script>
    <script src="script2.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" />
    <link rel="stylesheet" href="style.css" />
    <title>Üzenetküldés - Vaszilij EDC</title>
</head>
<body>
<nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="index.php">Vissza a Kezdőlapra</a></li>
          </ul>
          <h1 class="logo">
</h1>
      </div>
  </nav>
  </section>
    <section id="contact">
      <div class="contact-container container">
        <div class="form-container">
          <h3>Lépj Velünk Kapcsolatba</h3>
          <form id="contactForm" method="POST" action="send_email.php">
  <input type="email" id="username" name="username" placeholder="E-mail cím:" required />
  <input type="text" id="subject" name="subject" placeholder="Tárgy:" maxlength="20" required />
  <textarea
    id="message"
    name="message"
    cols="30"
    rows="23"
    placeholder="Üzenet:"
    maxlength="300"
    required
  ></textarea>

  <div id="charCount">300 karakter maradt</div>
  <div id="warningMessage" style="color: red; display: none;">Elérte az üzenet limitjét!</div>
  <br>
  <div>
    <label for="privacyPolicy">Elfogadom az adatkezelési tájékoztatót
      <input type="checkbox" id="privacyPolicy" />
    </label>
  </div>

  <button type="submit" class="btn btn-primary" id="submitButton" disabled onclick="Kuldes(event)">Küldés</button>
  <p id="alert"></p>
</form>
<div id="errorMessage" style="color: red; display: none;">Kötelező mező!</div>
    </section>


 
      <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="impresszum.php" class="nav-link px-2 text-muted">Impresszum</a></li>
    <li class="nav-item"><a href="joginyilatkozat.php" class="nav-link px-2 text-muted">Jogi Nyilatkozat</a></li>
      <li class="nav-item"><a href="cookiekezeles.php" class="nav-link px-2 text-muted">Cookie-Kezelés</a></li>
      <li class="nav-item"><a href="adatkezeles.php" class="nav-link px-2 text-muted">Adatkezelés</a></li>
    </ul>
    <p class="text-center text-muted">Vaszilij EDC © Minden Jog Fenntartva</p>
  </footer>
  </body>
  

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {

      $("a").on("click", function (event) {

        if (this.hash !== "") {

          event.preventDefault();

          var hash = this.hash;

          $("html, body").animate(
            {
              scrollTop: $(hash).offset().top,
            },
            800,
            function () {
              window.location.hash = hash;
            }
          );
        }
      });
    });
  </script>


  
</html>