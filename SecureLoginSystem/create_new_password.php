<?php require 'header.php' ?>

<main>
    <div>
        <section>
            <?php
            $selector = $_GET['selector'];
            $validator = $_GET['validator'];

            if (empty($selector) || empty($validator)) {
                echo "Your request cannot be validate at this moment!";
            } else {
                if (!ctype_xdigit($selector) || !ctype_xdigit($validator)) {
            ?>
                    <form action="server/recover_credentials.php">
                        <input type="hidden" name="selector" value="<?php echo $selector ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator ?>">
                        <input type="password" name="password-new" placeholder="Enter a new password">
                        <input type="password" name="password-new-confirm" placeholder="Re-enter the new password">
                        <button type="submit" name="password-reset-submit">Reset Password</button>
                    </form>
            <?php
                }
            }
            ?>
        </section>
    </div>
</main>

<?php require 'footer.php' ?>