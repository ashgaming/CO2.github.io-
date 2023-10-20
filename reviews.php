<?php
include 'component/conn.php';

$sql = "select * from review;";
$res = mysqli_query($conn,$sql);
echo "<br>
<h1>See What people thing about us</h1>
"

;
if(mysqli_num_rows($res)>0){
  /* echo "<table border=1 style=\"width:90%\">"; 
    echo "<th style=\"width:30%;margin:10px\">Name</th>
    <th style=\"width:70%;margin:10px\">Comment</th>";
    while($row = mysqli_fetch_assoc($res)){
       
       
        echo "   <tr>";
        echo '<td >'. $row['name'].'</td>';
        echo '<td style="margin: left 10px;padding: left 10px;">  <p style>' . $row['comment'] .'</p></td>';
        echo "   </tr>";
     }
    echo "   </tr>";
    echo "   </table>";
    echo "<h1>Comments</h1>";*/

    while($row = mysqli_fetch_assoc($res)){
    echo  '<h5><b>Username: </b>' . $row['name'].'</h5>';
    echo '<h5 style="margin: left 10px;padding: left 10px;"><p style>' . $row['comment'] .'</p> </h5>';
    echo "<br>";
    }
}


?>