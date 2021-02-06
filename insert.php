<?php
    include 'db.php';
    $fn = $_post["first_name"];
    $ln= $_post["last_name"];
    $ci= $_post["city"];
    $gi= $_post["group_id"];

    $sql="insert into table personalinfo (first_name , Last_name , city , group_id)
    values ($fn , $ln , $ci , $gi)" ;
    if ($conn->query($sql)===TRUE) {
        echo "New Record Added";
    }
    else{
        echo "Error". sql ."<br>" .$conn->error;
    }
    $conn->close();
?>