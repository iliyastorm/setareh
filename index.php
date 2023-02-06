<?php

if (isset($_POST['submit'])) {
    $num = $_POST['n1'];
    for ($a = 1; $a <= $num; $a++) {
        for ($j = $num - $a; $j >= 1; $j--) {
            echo '&nbsp';
        }
        for ($b = 1; $b <= $a; $b++) {
            echo "* ";
        }
        echo "<br>";
    }
}
?>

