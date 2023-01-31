<?php include '../../components/header.php' ?>

<main class="container mt-3 mx-auto">
    <h2>Exercise 4: Create the given pattern</h2>
    <div class="row">
        <div class="col-12 col-md-6 mt-3">
            <h6>Pattern:</h6>
            <div class="border border-primary rounded-3 shadow-lg p-2 mx-auto w-75">
                <table class="table table-borderless text-center mb-0">
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
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="mx-auto width mt-3">
                <h6>Code:</h6>
                <pre><code>
&lt;table class="table table-borderless text-center w-100 mb-0"&gt;
    &lt;tbody&gt;
        &lt;?php
            for ($row = 1; $row &lt;= 6; $row++) {
        
            echo "&lt;tr&gt;";
                echo "&lt;td&gt;$row&lt;/td&gt;";
        
            $multiply = $row;
            for ($col = 1; $col &lt;= 4; $col++) {
                $multiply *= $row + 1;
                echo "&lt;td&gt;$multiply&lt;/td&gt;";
            }
            echo '&lt;/tr&gt;';
        }
        ?&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
                </code></pre>
            </div>
        </div>
    </div>
</main>

<?php include '../../components/footer.php' ?>