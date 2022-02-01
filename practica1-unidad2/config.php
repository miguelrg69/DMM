<?php 
$conn = new mysqli("localhost",'root','','practicas');

if($conn->connect_errno){
    echo "Error: ".$conn->connect_error;
}
?>