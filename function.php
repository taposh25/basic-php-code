<?php
function greet($name) {
    echo "Welcome $name";
}

greet("Taposh");
?>

<br>

<?php
function checkEvenOdd($num) {
    if($num % 2 == 0){
        return "Even";
    } else {
        return "Odd";
    }
}

echo checkEvenOdd(15); // Odd
?>
