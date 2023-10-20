<?php
include 'component/conn.php';
$name = $_GET['id'];
$rate = $_GET['star'];
$Comment = $_GET['Comment'];

$sql = "insert into review (rating,comment,name) values($rate,'$Comment','$name');";
$res = mysqli_query($conn,$sql);
if($res){
    echo "<script>promt('review added succesfully');</script>";
    header("location:dicount.php?name=$name");
}else
{
    echo "<script>prompt('failed to add review');</script>";
    header("location:review.php");
}

?>