<?php include '../../components/header.php' ?>

<main class="container mt-3 mx-auto">
    <h2>Exercise 1: Create the given pattern (diamond)</h2>
    <div class="row">
        <div class="col-12 col-md-6 mt-3">
            <h6>Pattern:</h6>
            <div class="border border-primary rounded-3 shadow-lg p-2 mx-auto">
                <table class="table table-borderless text-center w-100 mb-0">
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
                                } else {
                                    if ($col == $left || $col == $right) {
                                        echo ("<td>*</td>");
                                    } else {
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
        </div>

        <div class="col-12 col-md-6">
            <div class="mx-auto width mt-3">
                <h6>Code:</h6>
                <pre><code>
&lt;table class="table table-borderless text-center w-100 mb-0"&gt;
    &lt;tbody&gt;
        &lt;?php
        $left = 3;
        $right = 3;
        for ($row = 0; $row &lt; 7; $row++) {
            if ($row &lt; 3) {
                $left = 3 - $row;
                $right = 3 + $row;
            }
            if ($row == 3) {
                $left = 0;
                $right = 6;
            }
            if ($row &gt; 3) {
                $left = $row - 3;
                $right = $right - 1;            
            }
            echo '&lt;tr&gt;';
            for ($col = 0; $col &lt; 7; $col++) {
                if ($col == 3) {
                    echo ("&lt;td&gt;|&lt;/td&gt;");
                } else {
                    if ($col == $left || $col == $right) {
                        echo ("&lt;td&gt;*&lt;/td&gt;");
                    } else {
                        echo ("&lt;td&gt;&lt;/td&gt;");
                    }
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

<?php include '../../components/footer.php' ?>