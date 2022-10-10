<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ../index.php");
    exit;
}

// Include config file
require_once "config.php";
include('..\\encryptPII.php');
include('..\\dec.php');
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $stmt = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, admin_mail, admin_passwd FROM admin_details WHERE admin_mail = ? and admin_passwd= ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $username = encrypt_data($username);
            $password = encrypt_data($password);
            $param_username = $username;
            $param_password = $password;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    // mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    //if(mysqli_stmt_fetch($stmt)){
                    //  if(password_verify($password, $hashed_password)){
                    // Password is correct, so start a new session
                    session_start();

                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = decrypt_data($username);

                    // Redirect user to welcome page
                    header("location: ../index.php");
                } else {
                    // Display an error message if password is not valid
                    $password_err = "The password or username you entered was not valid.";
                }
            }
        } /*else{
                    // Display an error message if username doesn't exist
                   # $username_err = "No account found with that username.";-->
                }*/
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    //mysqli_stmt_close($stmt);
}


// Close connection
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body {
            background-image: url("register1.jpg");

            background-repeat: no-repeat;
            background-size: 100% 170%;
            color: black;
            font-size: 17px;
            font-family: sans-serif;
        }

        .wrapper {
            width: 350px;
            padding-top: 8%;
            padding-bottom: 8%;
            margin: auto
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
                <!-- <a href="reset-password.php" class="btn btn-warning">forget password</a>-->
            </div>
            <!--<b> <p>Don't have an account? <a href="register.php">Sign up now</a>.</p></b> -->
        </form>
    </div>
</body>

</html>