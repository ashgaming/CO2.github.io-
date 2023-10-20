<?php
include 'component/conn.php';
include 'function.php';

$sql = "select sum(rating) as total from review;";
$sql1 = "select count(rating) as count from review";
$res = mysqli_query($conn, $sql);
$res1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($res);
$row1 = mysqli_fetch_assoc($res1);
if (mysqli_num_rows($res) > 0) {
}


$star1 = star_count($conn, 1);
$star2 = star_count($conn, 2);
$star3 = star_count($conn, 3);
$star4 = star_count($conn, 4);
$star5 = star_count($conn, 5);


?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php


    ?>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            margin: 0 auto;
            /* Center website */
            max-width: 100%;
            width: device-width;
            /* Max width */
            padding: 20px;
        }

        .heading {
            font-size: 25px;
            margin-right: 25px;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            margin-top: 10px;
            float: left;
            width: 70%;
        }

        /* Place text to the right */
        .right {
            text-align: center;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {
            height: 18px;
            background-color: #04AA6D;
        }

        .bar-4 {
            height: 18px;
            background-color: #2196F3;
        }

        .bar-3 {

            height: 18px;
            background-color: #00bcd4;
        }

        .bar-2 {
            height: 18px;
            background-color: #ff9800;
        }

        .bar-1 {
            height: 18px;
            background-color: #f44336;
        }

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {

            .side,
            .middle {
                width: 100%;
            }

            .right {
                display: none;
            }


        }
    </style>
</head>

<body>
    <p><?php
        $sum = $row['total'];
        $total = $row1['count'];
        $avg = $sum / $total;
        $avg = number_format($avg, 1);
        $c = intval($avg);

        // render stars
        for ($i = 1; $i < 6; $i++) {
            if ($i > $avg) { //echo $i,"-",$avg; 
                echo '  <span class="fa fa-star "></span>';
            } else { //echo $i,"-",$avg;
                echo '  <span class="fa fa-star checked"></span> ';
            }
        }
        echo "<br>", $avg; ?> average based on <?php echo $total ?> reviews.</p>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
        <div class="side">
            <div>5 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-5" style="<?php echo "width:$star5[2]%;"; ?>"></div>
            </div>
        </div>
        <div class="side right">
            <div>
                <?php echo $star5[0]; ?>
            </div>
        </div>
        <div class="side">
            <div>4 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-4" style="<?php echo "width:$star4[2]%;"; ?>"></div>
            </div>
        </div>
        <div class="side right">
            <div><?php echo $star4[0]; ?></div>
        </div>
        <div class="side">
            <div>3 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-3" style="<?php echo "width:$star3[2]%;"; ?>"></div>
            </div>
        </div>
        <div class="side right">
            <div><?php echo $star3[0]; ?></div>
        </div>
        <div class="side">
            <div>2 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-2" style="<?php echo "width:$star2[2]%;"; ?>"></div>
            </div>
        </div>
        <div class="side right">
            <div><?php echo $star2[0]; ?></div>
        </div>
        <div class="side">
            <div>1 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-1" style="<?php echo "width:$star1[2]%;"; ?>"></div>
            </div>
        </div>
        <div class="side right">
            <div><?php echo $star1[0]; ?></div>
        </div>
    </div>

</body>

</html>