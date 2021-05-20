<?php include_once 'header.php'; ?>

<section id="register-form">
    <h2>Register</h2>
    <form action="server/register.php" method="POST">
        <div id="user-info">
            <div class="input-field">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter first name">
            </div>
            <div class="input-field">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter last name">
            </div>
            <div class="input-field">
                <label for="birthdate">Date of Birth</label>
                <input type="date" id="birthdate" name="birthdate">
            </div>
            <div class="input-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="input-field">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" id="password-confirm" name="password-confirm" placeholder="Enter password again">
            </div>
            <section id="security-questions">
                <div class="security-question">
                    <label for="security-question-1">Security Question 1</label>
                    <select name="security-question-1" id="security-question-1">
                        <option value="What city were you born in?">What city were you born in?</option>
                        <option value="Where did you go high school?">Where did you go high school?</option>
                        <option value="Who is your favorite hero?">Who is your favorite hero?</option>
                        <option value="When did you graduate from high school?">When did you graduate from high school?</option>
                        <option value="Why did you select this option?5">Why did you select this option?</option>
                    </select>
                </div>
                <div class="security-answer">
                    <label for="security-answer-1">Security Answer 1</label>
                    <input type="text" id="security-answer-1" name="security-answer-1" placeholder="Enter answer 1">
                </div>
                <div class="security-question">
                    <label for="security-question-2">Security Question 2</label>
                    <select name="security-question-2" id="security-question-2">
                        <option value="What city were you born in?">What city were you born in?</option>
                        <option value="Where did you go high school?">Where did you go high school?</option>
                        <option value="Who is your favorite hero?">Who is your favorite hero?</option>
                        <option value="When did you graduate from high school?">When did you graduate from high school?</option>
                        <option value="Why did you select this option?">Why did you select this option?</option>
                    </select>
                </div>
                <div class="security-answer">
                    <label for="security-answer-2">Security Answer 1</label>
                    <input type="text" id="security-answer-2" name="security-answer-2" placeholder="Enter answer 2">
                </div>
            </section>
        </div>
        <!-- Google reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6Le9JsEaAAAAAESvEEgcKbIxPyvHWY783r8Knsul"></div>
        <button type="submit" name="register">Register</button>
        <button type="reset">Reset</button>
    </form>
    <?php include_once 'errors.php'; ?>
</section>

<p><a href="login.php">Already a user? Sign In</a></p>

<?php include_once 'footer.php'; ?>