<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "conection successful";
}else{
    echo "on connection";
}
mysqli_select_db($con,'youtubeuserdata2');
$select = $_POST['select'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "insert into userinfodata2 (username, password) 
Values ('$username', '$password')";
echo "$query";
mysqli_query($con, $query);
?>