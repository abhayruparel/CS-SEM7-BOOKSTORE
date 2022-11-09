<?php
// Include config file
require_once "config.php";
include('..\\connect.php');
include('..\\encryptPII.php');
include('..\\dec.php');

$username_err = $password_err = $confirm_password_err = $name_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM admin_details WHERE admin_mail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (!empty($_POST["password"]) && $_POST["password"] != "") {

        if (strlen($_POST["password"]) <= '8') {
            $password_err .= "Your Password Must Contain At Least 8 Digits !" . "<br>";
        } elseif (!preg_match("#[0-9]+#", $_POST["password"])) {
            $password_err .= "Your Password Must Contain At Least 1 Number !" . "<br>";
        } elseif (!preg_match("#[A-Z]+#", $_POST["password"])) {
            $password_err .= "Your Password Must Contain At Least 1 Capital Letter !" . "<br>";
        } elseif (!preg_match("#[a-z]+#", $_POST["password"])) {
            $password_err .= "Your Password Must Contain At Least 1 Lowercase Letter !" . "<br>";
        } elseif (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
            $password_err .= "Your Password Must Contain At Least 1 Special Character !" . "<br>";
        } elseif ($password_err === '') {
            $password = $_POST["password"];
        }
    } else {
        $password_err .= "Please Enter your password" . "<br>";
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please enter confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }


    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO admin_details(admin_fname, admin_mail, admin_passwd) VALUES(?,?,?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = encrypt_data($password);
            $param_name = $name;
            //$param_password=password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body {
            background-image: url("register1.jpg");
            /* background-color: #cccccc;*/
            background-repeat: no-repeat;
            background-size: 100% 130%;
            color: black;
            font-size: 17px;
            font-family: sans-serif;
        }


        .wrapper {
            width: 350px;
            padding: 20px;
            margin: auto
        }

        .star {
            color: red;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form" method="post">
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>First Name <span class="star">*</span></label>
                <input type="text" name="name" class="form-control">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username <span class="star">*</span></label>
                <input type="email" name="username" class="form-control">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password <span class="star">*</span></label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password <span class="star">*</span></label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <b>
                <p>Already have an account? <a class="login" href="login.php">Login here</a>.</p>
            </b>
        </form>
    </div>
</body>

</html>