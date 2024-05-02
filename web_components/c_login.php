<form class="log-in" action="./modules/_login.php" method="post">
    <div class="form-title">
        <h1>Log in</h1>
    </div>
    
    <div class="form-main">
        <div class="form-inputs">
            <div class="form-input username">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-input password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
        </div>

        <button type="submit" class="btn">Sign in</button>
    </div>

    <p>New here? <a href="./signup.php">Sign-up</a> now.</p>
</form>