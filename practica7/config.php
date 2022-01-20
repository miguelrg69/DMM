<?php 
$conn = new mysqli("localhost",'root','','practica7');

if($conn->connect_errno){
    echo "Error: ".$conn->connect_error;
}
?>