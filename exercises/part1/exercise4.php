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

    <div class="card-body width mx-auto">
    <pre>
    <code class="language-php">
        &lt;?php
        for ($row = 1; $row <= 6; $row++) {
            echo "&lt;tr&gt;";
            echo "&lt;td&gt;$row&lt;/td&gt;";
            $multiply = $row;
            for ($col = 1; $col &lt;= 4; $col++) {
                $multiply *= $row + 1;
                echo "&lt;td&gt;$multiply&lt;/td&gt;";
            }
            echo '&lt;tr&gt;';
        }
        ?&gt;
    </code>
    </pre>
    </div>

</div>





<?php include '../../components/footer.php' ?>