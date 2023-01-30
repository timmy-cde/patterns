<?php include '../../components/header.php' ?>

<div class="container mt-3 width mx-auto">
    <h2>Exercise 5: Using a PHP POST method, ask the user to input 2 numbers</h2>
    <ul>
        <li>Create a Grid using 2 inputs as the length and width</li>
        <li>Insert random CONSONANT letters into the grid</li>
        <li>Display the grid in table</li>
    </ul>
</div>

<?php
$consonants = [];
for ($i = 97; $i <= 122; $i++) {
    if (in_array(chr($i), ['a', 'e', 'i', 'o', 'u'])) {
        continue;
    }
    $consonants[] = chr($i);
}

if (isset($_POST['submit'])) {
    $grid = [];
    $grid_value = intval($_POST['number']);

    for ($row = 0; $row < $grid_value; $row++) {
        for ($col = 0; $col < $grid_value; $col++) {
            $randIndex = array_rand($consonants);
            $grid[$row][$col] = $consonants[$randIndex];
        }
    }
}
?>

<div class="width mx-auto mt-5">
    <label for="number" class="h6">Input a number: </label>
    <form class="row row-cols-auto g-2 align-items-center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="col-12">
            <div class="input-group">
                <input type="text" name="number" class="form-control border-dark" id="number">
            </div>
        </div>

        <div class="col-12">
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </div>
    </form>
</div>

<p class="h6 text-center mt-4">Result:</p>
<table class="table table-bordered border-dark w-result text-center mx-auto">
    <tbody>
        <?php
        if (!empty($grid)) {
            foreach ($grid as $row) {
                echo '<tr>';
                foreach ($row as $col) {
                    echo "<td>$col</td>";
                }
                echo '</tr>';
            }
        } else {
            null;
        }
        ?>
    </tbody>
</table>



<?php include '../../components/footer.php' ?>