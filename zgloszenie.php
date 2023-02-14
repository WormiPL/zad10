<?php
$conn=new mysqli("localhost","root", "","wedkarstwo");

if($conn->connect_error){
    die("error" . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $lowisko=$_REQUEST["lowisko"];
    $data=$_REQUEST["data"];
    $sedzia=$_REQUEST["sedzia"];

    $sql = "INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES ('0', '$lowisko', '$data', '$sedzia')";
    $conn->query($sql);
    $conn->close();
}

?>