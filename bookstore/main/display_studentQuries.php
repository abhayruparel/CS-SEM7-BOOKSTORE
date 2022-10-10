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

    <!-- PHP CODE INTEGRATION display_student_query.php-->
    <?php
    $con = mysqli_connect("localhost", "root", "", "bookstore");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con, "SELECT * FROM student_query");
    $result1 = mysqli_query($con, "SELECT * FROM admission_data");
    $result2 = mysqli_query($con, "SELECT * FROM counsellor_alloted");

    echo "<table border='1' id='st'>
<tr>
<th>Name</th>
<th>Student Mail Id</th>
<th>Query</th>
<th>flag</th>
<th>Student ID</th>
<th>Counsellor ID</th>
<th>Counselor Response</th>
</tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['mail'] . "</td>";
        echo "<td>" . $row['msg'] . "</td>";
        echo "<td>" . $row['flag'] . "</td>";
        while ($row1 = mysqli_fetch_array($result1)) {

            if ($row['mail'] == $row1['stu_mail']) {
                $studentIdAdmissionData = $row1['stu_id'];
                //echo $studentIdAdmissionData;
                echo "<td>" . $studentIdAdmissionData . "</td>";
                if ($studentIdAdmissionData) {
                    while ($row3 = mysqli_fetch_array($result2)) {
                        if ($studentIdAdmissionData == $row3['stu_id']) {
                            $couns_id = $row3['couns_alloted_id'];
                            //echo "<p>" . $couns_id . "<p>";
                            echo "<td>" . $couns_id . "</td>";
                        }
                    }
                }
            }
        }
        echo "<tr>" . $row['couns_response'] . "</td>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</div>

<?php
include("footer.php");
?>