<?php
$dbServername = "localhost";
$dbUsersname = "root";
$dbpassword = "";
$dbName = "reminder";
$connect = mysqli_connect($dbServername, $dbUsersname, $dbpassword, $dbName);
$email_id = $_POST['email_id'];
$message = $_POST['r_msg'];
$date = $_POST['r_date'];
$time = $_POST['r_time'];

$year = substr("$date", 0, 4);
$month = substr("$date", 5, 2);
$day = substr("$date", 8, 2);
$hours = substr("$time", 0, 2);
$mins = substr("$time", 3, 2);

$d_t = "$month $day $hours $mins";

echo $d_t;

$query = "INSERT INTO reminder(email_id, msg_body, d_t) values('$email_id', '$message', '$d_t')";
mysqli_query($connect, $query);

shell_exec('echo "$mins $hours $day $month * php /localhost/Project/mail.php" &> /var/spool/cron/root'); 

?>
