<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//var_dump($_POST);
const price = 3.50;


if(validForm()) {
    total($_POST['flavor']);
} else {
    echo "<p>Order Error!</p>";
}


function validForm(){
    $valid = true;
    if(!validName($_POST['yourName'])) {
        $valid = false;
        echo "<p>Full name is required</p>";
    }

    if(!validFlavors(isset($_POST['flavor']))){
        $valid = false;
        echo "<p>At least one Flavour is required</p>";

    }

    return $valid;

}



function validName($name) {
    if(empty($name)) {
//     echo "<p>Full name is required</p>";
        return false;
    }
    return true;
}

function validFlavors($check) {
    if(empty($check)) {
//       echo "<p>At least one Flavour is required</p>";
        return false;
    }


    if(is_array($check) || is_object($check)) {
        foreach ($check as $item) {
            if (!in_array($item, $check)) {
                echo "<p>stop spoofing</p>";
                return false;
            }
        }
    }

    return true;
}

function total($check) {
    $total = 0.0;
    $name = $_POST['yourName'];
    echo "<h1>Thank you, $name, for your order!</h1>";
    echo "Order Summary: <br>";
    echo "<ul>";
    foreach($check as $item) {
        echo "<li>$item</li>";
        $total += price;

    }
    $TotalCost = sprintf('%.2f', $total);
    echo "</ul>";
    echo "Order Total: $$TotalCost";
}
?>

