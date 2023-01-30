<?php include '../../components/header.php' ?>

<div class="width mx-auto">
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

    if(isset($_POST['submit'])) {
        $grid = [];
        $grid_value = intval($_POST['number']);

        for($row = 0; $row < $grid_value; $row++) {
            for($col = 0; $col < $grid_value; $col++) {
                $randIndex = array_rand($consonants);
                $grid[$row][$col] = $consonants[$randIndex];
            }
        }
    }
?>

<div class="width mx-auto">
    <label for="number">Input a number: </label>
    <form class="row row-cols-lg-auto g-2 align-items-top" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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

<table class="table table-bordered">
    <tbody>
        <?php 
            // foreach ($grid as $row) {
            //     foreach()
            // }
        ?>
    </tbody>
</table>



<?php include '../../components/footer.php' ?>