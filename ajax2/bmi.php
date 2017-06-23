<?php
$weight = $_GET['weight'];
$length = $_GET['length'];

$result = BMICalc($weight, $length);

function BMICalc($weight, $length) {
    $length = $length / 100;
    $BMI = round($weight / ($length * $length), 1);

    return $BMI;
}

switch (true){
    case ($result >= 18.5 && $result <= 24.9):
        echo "<p style='background-color: deepskyblue;'>Je BMI is: $result, je gewicht is normaal.</p>";
        break;
    case ($result >= 25 && $result <= 29.9):
        echo "<p style='background-color: limegreen;'>Je BMI is: $result, je hebt overgewicht.</p>";
        break;
    case ($result >= 30 && $result <= 39.9):
        echo "<p style='background-color: orange;'>Je BMI is: $result, je hebt obesitas.</p>";
        break;
    case ($result >= 40):
        echo "<p style='background-color: red;'>Je BMI is: $result, je hebt morbide obesitas.</p>";
        break;
}