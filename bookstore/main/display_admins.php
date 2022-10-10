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