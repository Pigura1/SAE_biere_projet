 
    <div class="login-container">
        <h2>LOGIN</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">ACCESS</button>
            </div>
            <div id="error-message" class="error-message"></div>
        </form>
    </div>
    <script>

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // VERY BASIC EXAMPLE - REPLACE WITH SERVER-SIDE AUTHENTICATION
    if (username === 'cyberpunk' && password === 'neon') {
        alert('Login Successful! Access Granted.');
        // Redirect or perform actions here
    } else {
        document.getElementById('error-message').textContent = 'Access Denied: Invalid credentials.';
    }
});

    </script>
</body>
</html>