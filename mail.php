<?php
$dbServername = "localhost";
$dbUsersname = "root";
$dbpassword = "";
$dbName = "reminder";
$connect = mysqli_connect($dbServername, $dbUsersname, $dbpassword, $dbName);

$currentDateTime = date('m d H i');
echo $currentDateTime;

$query = "SELECT * from reminder WHERE d_t='$currentDateTime'";
$cond = mysqli_query($connect, $query);
$row = mysqli_fetch_array($cond);

$email_id = $row['email_id'];
$message = $row['msg_body'];
$subject = "Your Reminder";

mail($email_id, $subject, $message);
if(mail()){
 echo "Mail sent successfully";
}

?>
