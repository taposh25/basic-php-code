<!-- <?php
echo "My first PHP program";
?> -->


<!-- <?php
$name = "Taposh";
$age = 22;

echo $name;
echo " <br><br>";
echo $age;
var_dump($name);
?> -->


<!-- 
<?php
$four = 12.7;
echo var_dump($four);
?> -->


<!-- // condition// -->

<!-- <?php

$swarnali  = 19;
$taposh = 24;

if($swarnali<$taposh){
    echo("Taposh is senior from Swarnali");
}
else if($taposh<$swarnali){
    echo("Swarnali is senior to Taposh");
}
else{
    echo("Both are same age");
}

?> -->

<!-- 
<?php
$a = 10;
$b = "10";

var_dump($a == $b);   // true
echo "<br>";
var_dump($a === $b);  // false


?> -->

<!-- addition -->




<!-- <?php
$a = 10;
$b = 40;
$c = 20;

if($a>$b && $a>$c){
    echo("A is Larger value");
}
else if($b>$a && $b>$c){
    echo("B is largest value");
}
else{
    echo(" C is largest vlue");
}
?> -->

<!-- Grade -->

<!-- <?php
$marks = 80;

if($marks >= 80 && $marks<=100){
    echo("You got A+");

}
else if($marks >= 70 && $marks<=79){
    echo("You got A");
}
else if($marks >= 60 && $marks<=69){
    echo("You got A-");
}
else if($marks >= 50 && $marks<=59){
    echo("You got B");
}
else if($marks >= 40 && $marks<=49){
     echo("You got C");
}
else if($marks >= 33 && $marks<=39){
     echo("You got D");
}
else{
    echo "You Got F";
}
?> -->



<!-- For Loop -->

<!-- * Print 1 to 10 number:   -->

<!-- <?php
for($i=1;$i<=10;$i++){
    echo $i . "  ";
}
?> -->

<!-- * Print 1 to 10 Even number:  

<?php
for($i=2;$i<=10;$i+=2){
    echo $i . "  ";
}
?> -->

<!-- * Sum of numbers: 

<?php

$sum = 0;
for($i=1; $i<=10;$i++){
    $sum = $i + $sum;
}
echo($sum);
?> -->

<!-- 
PHP foreach Loop -->



<!-- <?php
$colors = ["red", "green", "blue", "yellow"];

foreach($colors as $color){
    echo $color . " <br> ";
}
?> -->

<!-- print 1 to 1000 odd number only using foor loop -->

<?php

for($i=1; $i<=1000; $i++){
    if($i%2 != 0){
        echo $i . "<br>";
    }
}

?>