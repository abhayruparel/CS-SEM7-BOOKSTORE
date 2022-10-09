<?php
include("header.php");
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

<br>

<div id="page-wrapper">


    <!-- PHP CODE INTEGRATION display_counsellor_alloted.php-->
    <?php
    $con = mysqli_connect("localhost", "root", "", "admission_process");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM counsellor_alloted");

    echo "<table border='1' id='st'>
            <tr>
                <th>ID</th>
                <th>couns_alloted_id</th>
                <th>stu_id</th>
                <th>couns_id</th>
                <!--th>couns_alloted_date</th>
                <th>couns_alloted_time</th-->
            </tr>";
        //Define cipher 
        $cipher = "aes-256-cbc";
        $encrypted_data = 'rZK56O29JZ1Nupqrt+Q46g==';
        $encryption_key = 'QeThWmZq4t7w!z%C*F-JaNdRfUjXn2r5';
        $iv_size = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($iv_size);
        $iv = 'adb752c7dcff6acb2d78d1273f318f1c';
        //Decrypt data 
        $decrypted_data = openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv);

        echo "Decrypted Text: " . $decrypted_data; 
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";

       
        $id_dec = $row['id'];
        echo "<td>" . $id_dec . "</td>";
        echo "<td>" . $row['couns_alloted_id'] . "</td>";
        echo "<td>" . $row['stu_id'] . "</td>";
        echo "<td>" . $row['couns_id'] . "</td>";
        // echo "<td>" . $row['id'] . "</td>";
        // echo "<td>" . $row['couns_alloted_id'] . "</td>";
        // echo "<td>" . $row['stu_id'] . "</td>";
        // echo "<td>" . $row['couns_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</div>

<?php
include("footer.php");
?>