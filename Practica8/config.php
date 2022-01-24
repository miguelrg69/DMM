<?php 
$conn = new mysqli("localhost",'root','','practica8');

if($conn->connect_errno){
    echo "Error: ".$conn->connect_error;
}
?>