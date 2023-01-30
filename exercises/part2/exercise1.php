<?php include '../../components/header.php' ?>

<div class="width mx-auto">
    <h2>Exercise 1: Generate a random character from a-k</h2>
    <ul>
        <li>Create a 4 x 5 table</li>
        <li>Display all the random characters inside the table</li>
        <li>Highlight all the character that belongs to the even column</li>
    </ul>
</div>

<div class="container">
    <div>
        <p class="h6 text-center">(odd/even column)</p>
        <table class="table table-bordered w-50 text-center mx-auto">
            <tbody>
                <?php
                $chars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k'];
                echo '<tr>';
                for ($i = 0; $i < count($chars); $i++) {
                    echo "<td>$chars[$i]</td>";
                }
                echo '</tr>';

                echo '<tr>';
                for ($i = 0; $i < count($chars); $i++) {
                    echo "<td>$i</td>";
                }
                echo '</tr>';
                ?>
            </tbody>
        </table>
    </div>

    <div>
        <p class="h6 text-center">Result</p>
        <table class="table table-bordered w-result mx-auto text-center">
            <tbody>
                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < 5; $j++) {
                        $char = chr(rand(97, 107));
                        $index = array_search($char, $chars);
                        if ($index % 2 == 0) {
                            $char_upper = strtoupper($char);
                            echo "<td class='bg-info-subtle'>$char_upper</td>";
                        } else {
                            echo "<td>$char</td>";
                        }
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../../components/footer.php' ?>