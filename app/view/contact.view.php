
  
<H1>Retrouvez-nous sur les Réseaux Sociaux</H1>


<main class="contact">

<div class="instagram">
    <p>Sur Notre Compte Instagram</p>
<div id="instaimg">
    <a href="https://www.instagram.com/cyb3r_heaven?igsh=OHRkc2x5cDJqa3Zm&utm_source=qr"><img src="public/images/qrcode.png" 
    alt="qrcodeinstagram" 
    style="width:40px;height:40px;"></a>

</div>
</div>



<div class="Youtube">
    <p>Sur Notre Chaine YouTube</p>
<div id="youtubeimg">
    <a href=""><img src="public/images/Youtube_logo.png" alt="youtubeimg" style=""></a>
    
</div>
</div>

  

<div class="newsletter">
    <p>Rejoignez Notre Newsletter Pour Recevoir Toutes Nos Actualités 
        Et Offres Spéciales Directement Dans Votre Boîte Mail!</p>

        <form action="subscribe.php" method="post">
            <input type="email" name="email" placeholder="Votre Email" required>
            <button type="submit">S'abonner</button>
        </form>

<script>
    function subscribe() {
      const email = document.getElementById("email").value;
      const message = document.getElementById("message");

      if (!email) {
        message.textContent = "Veuillez entrer une adresse email.";
        return;
      }

      fetch("contact.model.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "email=" + encodeURIComponent(email)
      })
      .then(response => response.text())
      .then(data => {
        message.textContent = data;
        document.getElementById("email").value = "";
      })
      .catch(error => {
        message.textContent = "Une erreur s'est produite.";
        console.error("Erreur:", error);
      });
    }
  </script>
  </div>
