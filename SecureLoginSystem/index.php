
<?php include_once 'header.php'; ?>

    <?php if (!isset($_SESSION['id'])) {
        echo '';
    } else {
        echo "<p>Hi, {$_SESSION['firstname']} {$_SESSION['lastname']}.</p>
        <p>You have successfully logged in!</p>
        <p><a download href='./data/company_confidential_file.txt'>Download</a> company_confidential_file.txt.</p>";
    }
    ?>

<?php include_once 'footer.php'; ?>