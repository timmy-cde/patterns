<?php include '../../components/header.php' ?>

<div class="container">
    <h2>Exercise 2: Create the given pattern (X Pattern)</h2>
    <?php
    $length = 11;
    $left = 0;
    $right = 0;
    for ($row = 0; $row < $length; $row++) {
        if ($row < 5) {
            if ($row % 2 == 0) {
                $left = $row;
                $right = $length - $row - 1;
            } else {
                $left = $row;
                $right = $length - $row - 1;
            }
        }

        if ($row == 5) {
            $left = 5;
            $right = 5;
        }

        if ($row > 5) {
            if ($row % 2 == 0) {
                $left = $length - $row - 1;
                $right = $row;
            } else {
                $left = $length - $row - 1;
                $right = $row;
            }
        }

        for ($col = 0; $col < $length; $col++) {
            if ($row == 5 && $col == 5) {
                echo ("<span class='m-4'>1</span>");
            } else {
                if (($col == 1 || $col == 9) && ($row == 1 || $row == 9)) {
                    echo ("<span class='m-4'>5</span>");
                } elseif (($col == 3 || $col == 7) && ($row == 3 || $row == 7)) {
                    echo ("<span class='m-4'>3</span>");
                } elseif ($col == $left || $col == $right) {
                    echo ("<span class='m-4'>*</span>");
                } else {
                    echo ("<span class='m-4'> </span>");
                }
            }
        }
        echo ("<br>");
    }
    ?>
</div>


<?php include '../../components/footer.php' ?>