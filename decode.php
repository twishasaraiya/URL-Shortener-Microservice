<?php
    include('db.php');
    var_dump($_GET);
    $param=$_GET['c'];
    $sql="SELECT fullurl from sites where shorturl='$param'";
    $result=$conn->query($sql);
    if($result){
        $row=$result->fetch_assoc();
        $url=$row['fullurl'];
        Header("Location:".$url);
        exit;
    }
    else{
        echo "Error";
        exit;
    }
 ?>
