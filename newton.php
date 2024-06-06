<?php
function newtonInterpolation($x, $y, $x_point) {
    $n = count($x);
    $divided_diff = array();

    for ($i = 0; $i < $n; $i++) {
        $divided_diff[$i] = array();
        $divided_diff[$i][0] = $y[$i];
    }

    for ($j = 1; $j < $n; $j++) {
        for ($i = 0; $i < $n - $j; $i++) {
            $divided_diff[$i][$j] = ($divided_diff[$i + 1][$j - 1] - $divided_diff[$i][$j - 1]) / ($x[$i + $j] - $x[$i]);
        }
    }

    $result = $divided_diff[0][0];
    $term = 1;

    for ($j = 1; $j < $n; $j++) {
        $term *= ($x_point - $x[$j - 1]);
        $result += $divided_diff[0][$j] * $term;
    }

    return $result;
}

$x = [5, 10, 15, 20, 25, 30, 35, 40];
$y = [40, 30, 25, 40, 18, 20, 22, 15];

// Contoh penggunaan untuk x = 22
$x_point = 22;
$newton_result = newtonInterpolation($x, $y, $x_point);
echo "Interpolasi Newton untuk x = $x_point adalah: $newton_result\n";
?>
