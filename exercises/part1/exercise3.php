<?php include '../../components/header.php'; ?>

<div class="container">
    <h2>Exercise 3: Create the given pattern</h2>
    <?php
    $size = 9;
    for ($i = 1; $i <= $size; $i++) {
        // print column
        if ($i <= 5) {
            for ($j = 1; $j <= $i; $j++) {
                echo $i * $j . ' ';
            }
        } else {
            // for ($j = $size - $i + 1; $j >= 1; $j--) {
            //     // echo $i * $j . ' ';
            //     echo $j;
            // }
            for ($j = 1; $j <= $size - $i + 1; $j++) {
                echo ($size - $i + 1) * $j . ' ';
            }
        }
        echo "<br>";
    }
    ?>
</div>

<?php include '../../components/footer.php'; ?>