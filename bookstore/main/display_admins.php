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

<?php
    include('connect.php');
    include('dec.php');


$result = mysqli_query($conn, "SELECT * FROM admin_details");

echo "<table border='1' id='st'>
            <tr>
                <th>ID</th>
                <th>couns_alloted_id</th>
                <th>stu_id</th>
                <th>couns_id</th>
                <!--th>couns_alloted_date</th>
                <th>couns_alloted_time</th-->
            </tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    $fname = decrypt_data($row['admin_fname']);
    $lname = decrypt_data($row['admin_lname']);
    $number = decrypt_data($row['admin_contact_no']);
    $email = decrypt_data($row['admin_mail']);
    $password= decrypt_data($row['admin_passwd']);

    echo "<td>" . $fname . "</td>";
    echo "<td>" . $lname. "</td>";
    echo "<td>" . $email. "</td>";
    echo "<td>" . $number. "</td>";
    echo "<td>" . $password. "</td>";
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