<?php
function lagrangeInterpolation($x, $y, $x_point) {
    $n = count($x);
    $result = 0;

    for ($i = 0; $i < $n; $i++) {
        $term = $y[$i];
        for ($j = 0; $j < $n; $j++) {
            if ($j != $i) {
                $term = $term * ($x_point - $x[$j]) / ($x[$i] - $x[$j]);
            }
        }
        $result += $term;
    }
    
    return $result;
}

$x = [5, 10, 15, 20, 25, 30, 35, 40];
$y = [40, 30, 25, 40, 18, 20, 22, 15];

// Contoh penggunaan untuk x = 22
$x_point = 22;
$lagrange_result = lagrangeInterpolation($x, $y, $x_point);
echo "Interpolasi Lagrange untuk x = $x_point adalah: $lagrange_result\n";
?>
