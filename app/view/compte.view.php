 
   
   <div class="login-container">
    <h2>LOGIN</h2>
    <form id="loginForm">
        <div class="form-group1">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group2">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-access">ACCESS</button>
        </div>
        <div id="error-message" class="error-message"></div>
    </form>
</div>
  <div class="SpeedLineArea"></div>
 <script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'cyberpunk' && password === 'neon') {
        alert('Connexion réussie ! Accès accordé.');
    } else {
        document.getElementById('error-message').textContent = 'Accès refusé : Informations d\'identification non valides';
    }
});
</script>





<script>
function InitSpeedLine(){
  var tHTML=``;
  var width = window.innerWidth;
  var height = window.innerHeight;
  for(var i=0; i<100; i++){
    var dx = Math.random() * width;     // position x aléatoire plein écran
    var dy = Math.random() * height;    // position y aléatoire plein écran
    var dz = (Math.random()-0.5)*0;
    var dt = Math.random()*5;
    var dangle = Math.random()*360;     // angle rotation en degrés
    var rc = `hsl(${Math.random()*360}deg,100%,50%)`;
    tHTML += `<div class="SpeedLineChange" style="animation-delay:${-dt}s; left:${dx}px; top:${dy}px;">
      <div class="SpeedLine" style="transform:
      rotateZ(${dangle}deg) rotateY(90deg);background:${rc}"></div>
    </div>`;
  }
  document.querySelector(".SpeedLineArea").innerHTML = tHTML;
}

InitSpeedLine();
</script>





</body>
</html>




