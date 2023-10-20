<?php

function star_count($conn,$rating)
{
    $count1 = "select count(rating) as count  from review where rating=$rating;";
    $count= "select count(rating) as count  from review";
    $result1 = mysqli_query($conn, $count1);
    $result = mysqli_query($conn, $count);
    $row_res1 = mysqli_fetch_assoc($result1);
    $row_res = mysqli_fetch_assoc($result);


    $num = $row_res1['count'];
    $count =  $row_res['count'];
    $per = ($num / $count) * 100 ;
    return array($num,$count,$per);
}


?>