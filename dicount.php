<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <?php
    $name = $_GET['name'];
    $t = date('h:i A');
    $d = date('d-m-y');
    $d = date('d-m-y', strtotime($d . ' +1 day'));;
    ?>
</head>

<body>
    <center>
        <p class="card-text">Take Screenshot of this card to get 10% discount</p>
        <br><br>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/CO2_re/img/co2_banner.jpeg" style="width:18rem;height:15rem" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">CO2</h5>
                <p class="card-text"> Dicount card</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Name: </b> <?php echo $name ?> </li>
                <li class="list-group-item"><b>Valid Till:</b> <?php echo $d ?> </li>
                <li class="list-group-item"><b>Time:</b> <?php echo $t ?> </li>
            </ul>
            <div class="card-body">
                <a href="/CO2_re/review.php" class="card-link"><button type="submit" class="btn btn-primary">Back</button></a>

            </div>
        </div>
    </center>
</body>

</html>