<?php include_once 'header.php'; ?>

<h2>Login</h2>

<section id="login-form">
    <form action="server/login.php" method="post">
        <div id="credentials">
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password">
            </div>
        </div>
        
        <!-- Google reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6Le9JsEaAAAAAESvEEgcKbIxPyvHWY783r8Knsul"></div>
        <button type="submit" name="login">Log In</button>
    </form>
    <?php include_once 'errors.php' ?>
</section>

<p><a href="register.php">New User? Sign Up</a></p>
<p><a href="recover_credentials.php">Forgot Username or Password?</a></p>

<?php include_once 'footer.php'; ?>