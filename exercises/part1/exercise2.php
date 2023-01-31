<?php include '../../components/header.php' ?>

<main class="container mt-3 mx-auto">
    <h2>Exercise 2: Create the given pattern (X Pattern)</h2>
    <div class="row">
        <div class="col-12 col-md-6 mt-3">
            <h6>Pattern:</h6>
            <div class="border border-primary rounded-3 shadow-lg p-2 mx-auto">
                <table class="table table-borderless text-center w-100 mb-0">
                    <tbody>
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
                            echo '<tr>';

                            for ($col = 0; $col < $length; $col++) {
                                if ($col == 5 && $row == 5) {
                                    echo ("<td>1</td>");
                                } else {
                                    if (($col == 1 || $col == 9) && ($row == 1 || $row == 9)) {
                                        echo "<td>5</td>";
                                    } elseif (($col == 3 || $col == 7) && ($row == 3 || $row == 7)) {
                                        echo "<td>3</td>";
                                    } elseif ($col == $left || $col == $right) {
                                        echo "<td>*</td>";
                                    } else {
                                        echo "<td> </td>";
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
        $length = 11;
        $left = 0;
        $right = 0;
        for ($row = 0; $row &lt; $length; $row++) {
            if ($row &lt; 5) {
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
        
            if ($row &gt; 5) {
                if ($row % 2 == 0) {
                    $left = $length - $row - 1;
                    $right = $row;
                } else {
                    $left = $length - $row - 1;
                    $right = $row;
                }
            }
            echo '&lt;tr&gt;';
        
            for ($col = 0; $col &lt; $length; $col++) {
                if ($col == 5 && $row == 5) {
                    echo ("&lt;td&gt;1&lt;/td&gt;");
                } else {
                    if (($col == 1 || $col == 9) && ($row == 1 || $row == 9)) {
                        echo "&lt;td&gt;5&lt;/td&gt;";
                    } elseif (($col == 3 || $col == 7) && ($row == 3 || $row == 7)) {
                        echo "&lt;td&gt;3&lt;/td&gt;";
                    } elseif ($col == $left || $col == $right) {
                        echo "&lt;td&gt;*&lt;/td&gt;";
                    } else {
                        echo "&lt;td&gt; &lt;/td&gt;";
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