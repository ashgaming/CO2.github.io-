<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Review</title>
    <style>
        .checked {
            color: orange;
        }

        .form {
            
            border: 5px black;
        }
    </style>

    <script>
        $(document).ready(function() {
            resetStarColor();
            $('.fa-star').mouseover(function() {

                resetStarColor();
            });

            $('.fa-star').mouseleave(function() {
                resetStarColor();

            });
        });

        function resetStarColor() {
            $('.fa-star').CSS('color', 'white');
        }
    </script>

</head>

<body>
    <?php include 'component/nav.php' ?>
    <?php include 'rev_board.php' ?>
    <br><br>
    <div class="form">
        <form action="db_rev.php" method="get">
            <label for="">
                <h1>What you think about us??</h1>
            </label><br>
            <label for="name"><b>Enter Name</b></label><br>
            <input type="text" name="id" placeholder="Enter your name" required><br>

            <label for="name"><b>Rating</b></label><br>
            <input type="radio" name="star" value="1" required>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span><br>
            <input type="radio" name="star" value="2" required>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><br>
            <input type="radio" name="star" value="3" required>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span><br>

            <input type="radio" name="star" value="4" required>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span> <br>

            <input type="radio" name="star" value="5" required>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span> <br>
            <br>
            <label for="Comment"><b>Comment</b></label><br>
            <textarea name="Comment" id="comment" cols="100" rows="10" style="width: 95%;"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="rev">

    </div>

    <?php include 'reviews.php' ?>
    <?php include 'component/footer.php' ?>
</body>

</html>