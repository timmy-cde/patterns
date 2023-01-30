<?php include '../../components/header.php' ?>

<div class="width mx-auto">
    <h2>Exercise 2: Manipulation of multidimensional array</h2>
    <ul>
        <li>Create a 4 x 4 table</li>
        <li>Generate a random number from 1 - 100</li>
        <li>The number generated should always be unique</li>
        <li>Sum up the number per column and row</li>
    </ul>
</div>

<?php
    $table = $row_sum = $col_sum = array();

    for($row = 0; $row < 4; $row++){
        for($col = 0; $col < 4; $col++){
            $table[$row][$col] = rand(1, 100);
        }
    }

    $row_sum = array_map(function ($sub_array) {
        return array_reduce($sub_array, fn($carry, $number) => $carry + $number);
    }, $table);

    for($col = 0; $col < 4; $col++){
        $carry = 0;
        for($row = 0; $row < 4; $row++){
            $carry += $table[$col][$row];
        }
        $col_sum[$col] = $carry;
    }
?>

<table class="table table-borderless w-result text-center mx-auto">
    <tbody>
        <?php 
            for($row = 0; $row < 5; $row++) {
                echo '<tr>';
                if($row == 4) {
                    foreach ($col_sum as $sum) {
                        echo "<td class='fw-bold'>$sum</td>";
                    }
                } else {
                    for($col = 0; $col < 5; $col++) {
                        if($col == 4) {
                            echo '<td class="fw-bold">' . $row_sum[$row] . '</td>';
                        } else {
                            echo '<td class="border border-primary">' . $table[$row][$col] . '</td>';
                        }
                    }
                }
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<?php include '../../components/footer.php' ?>