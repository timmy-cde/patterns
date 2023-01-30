<?php include '../../components/header.php'; ?>

<div class="container">
    <h2>Exercise 3: Create the given pattern</h2>
    <table class="table table-borderless w-25 text-center">
        <tbody>
            <?php
            $size = 9;
            for ($row = 1; $row <= $size; $row++) {
                if ($row <= 5) {
                    echo '<tr>';
                    for ($col = 1; $col <= $row; $col++) {
                        echo '<td>' . $row * $col . '</td>';
                    }
                } else {
                    for ($col = 1; $col <= $size - $row + 1; $col++) {
                        echo '<td>' . ($size - $row + 1) * $col . '</td>';
                    }
                }
                echo '</tr>';
                // echo "<br>";
            }
            ?>

        </tbody>
    </table>
</div>

<?php include '../../components/footer.php'; ?>