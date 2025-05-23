 
   
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
</body>
</html>



