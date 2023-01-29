<?php include '../../components/header.php' ?>

<div class="container">
    <h2>Exercise 1: Create the given pattern (diamond)</h2>

    <?php
    for ($row = 0; $row < 7; $row++) {
        for ($col = 0; $col < 3; $col++) {
            if ($col < 3) {
                echo 'X';
            } else {
                echo 'Z';
            }
        }
        echo '|';
        for ($col = 0; $col < 3; $col++) {
            echo 'Y';
        }
        echo '<br>';
    }

    echo '<br>';

    // for ($row = 1; $row <= 6; $row++) {
    //     // echo $row . ' ';
    //     echo "$row";

    //     $multiply = $row;
    //     for ($col = 1; $col <= 4; $col++) {
    //         $multiply *= $row + 1;
    //         // echo $multiply . ' ';
    //         echo "$multiply  ";
    //     }
    //     echo '<br>';
    // }

    // for ($i = 0; $i < 7; $i++) {
    //     for ($j = 0; $j < 3; $j++) {
    //         if ($j < $i && $i < 4) {
    //             echo "X ";
    //         } else if ($j >= 2 - $i && $i >= 4) {
    //             echo "X ";
    //         } else {
    //             echo "* ";
    //         }
    //     }
    //     echo "| ";
    //     for ($j = 0; $j < 3; $j++) {
    //         if ($j >= 2 - $i && $i < 4) {
    //             echo "X ";
    //         } else if ($j < $i && $i >= 4) {
    //             echo "X ";
    //         } else {
    //             echo "* ";
    //         }
    //     }
    //     echo "<br>";
    // }

    // $m = 1;
    // for ($row = 1; $row <= 5; $row++) {
    //     for ($column = $row; $column <= 4; $column++) {
    //         echo $column;
    //         echo "&nbsp;&nbsp;";
    //     }
    //     for ($k = 1; $k <= $m; $k++) {
    //         // echo $k;
    //         echo "* ";
    //     }
    //     for ($c = $m; $c > 1; $c--) {
    //         // echo $c;
    //         echo "* ";
    //     }
    //     echo "<br>";
    //     $m++;
    // }

    ?>
</div>



<?php include '../../components/footer.php' ?>