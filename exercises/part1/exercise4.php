<?php include '../../components/header.php' ?>

<div class="width mx-auto">
    <h2>Exercise 4: Create the given pattern</h2>

    <table class="table table-borderless w-25 mx-auto">
        <tbody>
            <?php
            for ($row = 1; $row <= 6; $row++) {

                echo "<tr>";
                echo "<td>$row</td>";

                $multiply = $row;
                for ($col = 1; $col <= 4; $col++) {
                    $multiply *= $row + 1;
                    echo "<td>$multiply</td>";
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <div class="card-body width mx-auto position-relative">
        <pre class="language-php">
            <code>
&lt;?php
for ($row = 1; $row <= 6; $row++) {
    echo "$row ";
    $multiply = $row;
    for ($col = 1; $col &lt;= 4; $col++) {
        $multiply *= $row + 1;
        echo "$multiply ";
    }
    echo '&lt;br&gt;';
}
?&gt;
            </code>
        </pre>
    </div>

</div>





<?php include '../../components/footer.php' ?>