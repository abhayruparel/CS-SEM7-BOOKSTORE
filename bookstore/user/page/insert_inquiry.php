<?php
include("header.php");
error_reporting(0);
?>

<head>
    <link href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/bower_components/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
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
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $inquiry = $_POST['inquiry'];

            $enc_name = $name;
            $enc_email = $email;
            $enc_number = encrypt_data($number);
            $enc_inquiry = $inquiry;

            $enc_name = $conn->real_escape_string($enc_name);
            $enc_email = $conn->real_escape_string($enc_email);
            $enc_number = $conn->real_escape_string($enc_number);
            $enc_inquiry = $conn->real_escape_string($enc_inquiry);
            //$enc_fname = mysql_real_escape_string($enc_fname);
            //INSERT INTO `enquiry_data` (`id`, `name`, `mail`, `contact`, `interested_field`) VALUES ('1', 'raj', 'admin@admin.com', '87123871', 'not good');
            $sql = "INSERT INTO `enquiry_data` (`name`, `mail`, `contact`, `interested_field`) VALUES ('$enc_name', '$enc_email', '$enc_number','$enc_inquiry')";
           // echo $sql;
            if (mysqli_query($conn, $sql)) {
              //  echo "Record inserted successfully";
                // header('insert_admin.php');
                $message = "your inquiry has been saved..!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                echo mysqli_error($conn);
                $message = "error";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        ?>
        <form method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mail" name="email">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Contact" name="number">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Inquiry" name="inquiry">
            </div>
            <div class="input-group mb-3">
                <input type="submit" class="form-control" name="submit" value="Insert">
            </div>
        </form>
    </div>
    <!-- </div> -->
</body>
<?php
include("footer.php");
?>

</html>