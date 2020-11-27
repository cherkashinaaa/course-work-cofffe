<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "coffe_shop");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
// attempt insert query execution
$sql = "INSERT INTO call_request (first_name, last_name, email, message) VALUES ('$first_name', '$last_name', '$email', '$message')";
if(mysqli_query($link, $sql)){
    echo "Ваша заявка добавлена !";
    header('Refresh: 3; /CourseWorkWeb/course-work-cofffe');
    exit;
} else{
    echo "Произошла ошибка  $sql. " . mysqli_error($link);

}
 
// close connection
mysqli_close($link);
?>