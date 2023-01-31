<?php include '../../components/header.php'; ?>

<main class="container mt-3 mx-auto">
    <h2>Exercise 3: Create the given pattern</h2>
    <div class="row">
        <div class="col-12 col-md-6 mt-3">
            <h6>Pattern:</h6>
            <div class="border border-primary rounded-3 shadow-lg p-2 w-50 mx-auto">
                <table class="table table-borderless text-center w-100 mb-0">
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
        $size = 9;
        for ($row = 1; $row &lt;= $size; $row++) {
            if ($row &lt;= 5) {
                echo '&lt;tr&gt;';
                for ($col = 1; $col &lt;= $row; $col++) {
                    echo '&lt;td&gt;' . $row * $col . '&lt;/td&gt;';
                }
            } else {
                for ($col = 1; $col &lt;= $size - $row + 1; $col++) {
                    echo '&lt;td&gt;' . ($size - $row + 1) * $col . '&lt;/td&gt;';
                }
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

<?php include '../../components/footer.php'; ?>