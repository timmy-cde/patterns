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
    $input_length_err;
    $input_width_err;
    $grid_value_length;
    $grid_value_width;

    $input_length = filter_input(INPUT_POST, 'length', FILTER_SANITIZE_NUMBER_INT);
    $input_width = filter_input(INPUT_POST, 'width', FILTER_SANITIZE_NUMBER_INT);

    if ($input_length != '' && $input_width != '') {
        $grid_value_length = intval($_POST['length']);
        $grid_value_width = intval($_POST['width']);
    } elseif ($input_length != '' && $input_width == '') {
        $input_width_err = 'Invalid input, not an integer!';
    } elseif ($input_length == '' && $input_width != '') {
        $input_length_err = 'Invalid input, not an integer!';
    } else {
        $input_length_err = 'Invalid input, not an integer!';
        $input_width_err = 'Invalid input, not an integer!';
    }

    if (empty($input_length_err) && empty($input_width_err)) {
        for ($row = 0; $row < $grid_value_length; $row++) {
            for ($col = 0; $col < $grid_value_width; $col++) {
                $randIndex = array_rand($consonants);
                $grid[$row][$col] = $consonants[$randIndex];
            }
        }
    }
}
?>

<div class="width mx-auto mt-5">
    <form class="row row-cols-auto g-2 align-items-center" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="col-6">
            <label for="length" class="h6">Input a number for length: </label>
            <div class="input-group has-validation">
                <input type="text" name="length" class="form-control border-dark <?php echo $input_length_err ? 'is-invalid' : null; ?>" id="length">
                <div id="validationServerFeedback" class="invalid-feedback">
                    <?php echo $input_length_err; ?>
                </div>
            </div>
        </div>
        <div class="col-6">
            <label for="width" class="h6">Input a number for width: </label>
            <div class="input-group has-validation">
                <input type="text" name="width" class="form-control border-dark <?php echo $input_width_err ? 'is-invalid' : null; ?>" id="width">
                <div id="validationServerFeedback" class="invalid-feedback">
                    <?php echo $input_width_err; ?>
                </div>
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