<?php 
$conn = new mysqli("localhost",'root','','practica6');

if($conn->connect_errno){
    echo "Error: ".$conn->connect_error;
}
?>