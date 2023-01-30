<?php include '../../components/header.php' ?>

<div class="container">
    <h2>Exercise 1: Create the given pattern (diamond)</h2>
    <table class="table table-borderless w-25">
        <tbody>
            <?php
            $left = 3;
            $right = 3;
            for ($row = 0; $row < 7; $row++) {
                if ($row < 3) {
                    $left = 3 - $row;
                    $right = 3 + $row;
                }
                if ($row == 3) {
                    $left = 0;
                    $right = 6;
                }
                if ($row > 3) {
                    $left = $row - 3;
                    $right = $right - 1;
                }

                echo '<tr>';
                for ($col = 0; $col < 7; $col++) {
                    if ($col == 3) {
                        echo ("<td>|</td>");
                        // if ($row == 0 || $row == 6) {
                        //     // echo ("<span class='m-4'>&nbsp|</span>");
                        // } else {
                        //     // echo ("<span class='m-4'>|</span>");
                        // }
                    } else {
                        if ($col == $left || $col == $right) {
                            // echo ("<span class='m-4'>*</span>");
                            echo ("<td>*</td>");
                        } else {
                            // echo ("<span class='m-4'></span>");
                            echo ("<td></td>");
                        }
                    }
                }
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
</div>

<?php include '../../components/footer.php' ?>