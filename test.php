<?php
// Include the interpolation functions
include 'lagrange.php';
echo "</br>";
include 'newton.php';

echo "</br>";
echo "</br>";

$x = [5, 10, 15, 20, 25, 30, 35, 40];
$y = [40, 30, 25, 40, 18, 20, 22, 15];

// Testing Lagrange Interpolation
$x_test_points = [5, 10, 15, 22, 25, 30, 35, 40];
echo "Testing Lagrange Interpolation:\n </br>" ;
foreach ($x_test_points as $x_point) {
    $lagrange_result = lagrangeInterpolation($x, $y, $x_point);
    echo "x = $x_point, y = $lagrange_result\n </br>";
}

// Testing Newton Interpolation
echo "Testing Newton Interpolation:\n </br>";
foreach ($x_test_points as $x_point) {
    $newton_result = newtonInterpolation($x, $y, $x_point);
    echo "x = $x_point, y = $newton_result\n </br>";
}
?>
