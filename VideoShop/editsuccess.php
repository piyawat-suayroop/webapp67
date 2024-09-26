<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Success</title>
</head>
<body>
<?php
require 'conn.php';

// ใช้ prepared statements เพื่อป้องกัน SQL injection
$stmt = $conn->prepare("UPDATE member SET mname=?, mlastname=?, maddress=?, mtel=? WHERE mid=?");
$stmt->bind_param("ssssi", $_POST['mname'], $_POST['mlastname'], $_POST['maddress'], $_POST['mtel'], $_POST['mid']);

if ($stmt->execute()) {
    echo "Edit Success <br>";
    header("refresh: 1; url=memmenu.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

</body>
</html>