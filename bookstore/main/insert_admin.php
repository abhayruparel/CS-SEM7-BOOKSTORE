<?php
include("header.php");
error_reporting(0);
?>

<head>
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="enroll_form_style.php" />
    <style>
        table {
            border-collapse: collapse;
        }

        #st {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            align-items: center;
        }

        #st td,
        #st th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #st tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #st tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>


<body>
    <div id="page-wrapper">
        <?php
        include("connect.php");
        include("encryptPII.php");



        if (isset($_POST["submit"]) && $_POST["submit"] != "") {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $password = $_POST['password'];

            // $enc_fname = encrypt_data($fname);
            // $enc_lname = encrypt_data($lname);
            $enc_email = encrypt_data($email);
            $enc_number = encrypt_data($number);
            $enc_pass = encrypt_data($password);

            $enc_fname = $conn->real_escape_string($fname);
            $enc_lname = $conn->real_escape_string($lname);
            $enc_email = $conn->real_escape_string($enc_email);
            $enc_number = $conn->real_escape_string($enc_number);
            $enc_pass = $conn->real_escape_string($enc_pass);
            //$enc_fname = mysql_real_escape_string($enc_fname);

            $sql = "INSERT INTO admin_details (admin_fname, admin_lname, admin_contact_no, admin_mail, admin_passwd, admin_photo) VALUES ('$enc_fname', '$enc_lname', '$enc_number', '$enc_email', '$enc_pass', 'photo')";

            if (mysqli_query($conn, $sql)) {
                echo "Record inserted successfully";
                // header('insert_admin.php');
            } else {
                echo "error";
            }
        }
        ?>
        <form method="POST" >
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin_fname" name="fname">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin_lname" name="lname">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin_contact_no" name="number">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin_email" name="email">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="admin_passwd" name="password">
            </div>
            <div class="input-group mb-3">
                <input type="submit" class="form-control" placeholder="admin_passwd" name="submit" value="Insert">
            </div>
        </form>
    </div>
</body>
<?php
include("footer.php");
?>

</html>