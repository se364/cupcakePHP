<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!--
    Author: Shah Emran, John Laygo, Benjamin Halbert
    Date: 4/13/2020
    URL : http://semran.greenriverdev.com/328/cupcakes-master/cupcakes-master/index.php'
    Brief Description: The program provides the total price of the cupcake based on the user
                       selections from the list.

-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="cupcake.css">
    <title>Cupcakes</title>
    <link rel="icon" type="image/jpeg" href="cupcake.jpg">
</head>
<body>
<div class="container" id="main">

    <div class="jumbotron jumbotron-fluid" id="title">
        <div class="container">
            <h1 class="display-3">Welcome</h1>
            <p class="lead">Please enter information to buy our cupcakes</p>
        </div>
    </div>
    <img src="cupcake.jpg" class="float-right" alt="Guest">
<h2>Cupcake Fundraiser</h2>

<form action="ccvalidate.php" method="POST">
    <fieldset class="form-group">


    <div class="form-group">
        <label for="yourName">Your Name</label>
        <input type="text" class="form-control"  id="yourName" name="yourName">
        <span class="err" id="errFname">Please enter your name</span>
    </div>
    </fieldset>

    <fieldset class="form-group">
        <legend>Cupcake Flavors</legend>


    <?php
    $flavors = array('grasshopper'=>'The Grasshopper', 'maple'=>'Whiskey Maple Bacon',
        'carrot'=>'Carrot Walnut', 'caramel'=>'Salted Caramel Cupcake',
        'velvet'=>'Red Velvet', 'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu');

    foreach($flavors as $flavor => $x) {
        echo "<div class=\"form-group\">
        <input class=\"form-check-label\" type=\"checkbox\" name=\"flavor[]\"
               id=\"$flavor\" value=\"$x\">
        <label class=\"form-check-label\" for=\"$flavor\">$x</label>
    </div>";
    }

    ?>

    <span class="err" id="errToppings">Please select at least one flavor.</span>

    </fieldset>

    <button type="submit" class="btn btn-primary">Order</button>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
