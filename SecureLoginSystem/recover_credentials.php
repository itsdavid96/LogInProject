<?php include_once 'header.php'; ?>

<h2>Credentials Recovery</h2>

<section id="username-retrieve-form">
    <form action="server/recover_credentials.php">
        <h3>Recover Credentials</h3>
        <div>
            <label for="username-retrieve">Enter your email:</label>
            <input type="email" id="username-retrieve" name="username-retrieve" placeholder="Enter your email">
        </div>

        <button type="submit">Recover Username</button>
    </form>
    <?php include_once 'errors.php'; ?>
</section>
<section id="password-recover-form">
    <form action="server/recover_credentials.php">
        <h3>Password Recovery</h3>
        <div>
            <label for="password-reset">Enter your username:</label>
            <input type="text" id="password-reset" name="password-reset" placeholder="Enter your username">
        </div>

        <button type="submit">Reset Password</button>
    </form>
    <?php include_once 'errors.php'; ?>
</section>

<p><a href="login.php">Remember your Username and Password? Sign In!</a></p>

<?php include_once 'footer.php'; ?>