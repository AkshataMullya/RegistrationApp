"</td><td>"<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
$conn = mysqli_connect("database1.cikrt1wxrd3j.us-east-1.rds.amazonaws.com:3306","admin","^TFGHY6tfghy");
mysqli_select_db($conn,'studentdb');
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)) {
    echo "<table><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>EmailID</th><th>MobileNo.</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["email"]. "</td><td>" . $row["mobile"]."</td></tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>
