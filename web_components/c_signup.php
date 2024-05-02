<form class="sign-up" action="./modules/_signup.php" method="post">
    <div class="form-title">
        <h1>Create an account</h1>
    </div>
    
    <div class="form-main">
        <div class="form-inputs">
            <div class="form-input f-name">
                <label for="f-name">First Name</label>
                <input type="text" name="f_name" id="f_name" onkeyup="validateForm(0)" required>
                <p>Name must be three or more characters</p>
            </div>

            <div class="form-input l-name">
                <label for="l-name">Last Name</label>
                <input type="text" name="l_name" id="l_name">
                <p>lastname</p>
            </div>

            <div class="form-input username">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" onkeyup="validateForm(2)" required>
                <p>Username must be six or more characters</p>
            </div>

            <div class="form-input email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" onkeyup="validateForm(3)" required>
                <p>Please enter a valid email address</p>
            </div>

            <div class="form-input password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" onkeyup="validateForm(4)" required>
                <p>Password must be eight or more characters</p>
            </div>
        </div>

        <button type="submit" class="btn">Sign up</button>
    </div>

</form>