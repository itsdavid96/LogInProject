<?php
if (isset($_GET['error'])) {
    $get_error = $_GET['error'];
    $errors = array();
    if ($get_error === "empty-input") {
        array_push($errors, "Fill in all fields!");
    } else if ($get_error === "email-check-failed") {
        array_push($errors, "Email check failed!");
    } else if ($get_error === "invalid-email") {
        array_push($errors, "Email is invalid!");
    } else if ($get_error === "email-already-registered") {
        array_push($errors, "Email already registered!");
    } else if ($get_error === "username-check-failed") {
        array_push($errors, "Username check failed!");
    } else if ($get_error === "invalid-username") {
        array_push($errors, "Username is invalid!");
    } else if ($get_error === "username-already-exists") {
        array_push($errors, "Username already registered!");
    } else if ($get_error === "passwords-do-not-match") {
        array_push($errors, "Passwords do not match!");
    } else if ($get_error === "security-questions-cannot-repeat") {
        array_push($errors, "Security questions cannot repeat!");
    } else if ($get_error === "invalid-security-answer-1") {
        array_push($errors, "Security answer 1 is invalid!");
    } else if ($get_error === "invalid-security-answer-2") {
        array_push($errors, "Security answer 2 is invalid!");
    } else if ($get_error === "security-answers-cannot-repeat") {
        array_push($errors, "Security answers cannot repeat!");
    } else if ($get_error === "invalid-recaptcha") {
        array_push($errors, "Invalid reCAPTCHA!");
    } else if ($get_error === "registration-failed") {
        array_push($errors, "Registration failed!");
    } else if ($get_error === "none") {
        array_push($errors, "Registration successful!");
    } else if ($get_error === "login-failed") {
        array_push($errors, "Login Failed! Incorrect username or password!");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error;
        }
    }
}
