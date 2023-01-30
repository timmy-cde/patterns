<?php include '../../components/header.php' ?>

<div class="width mx-auto">
    <h2>Exercise 3: Create a stack of integers using arrays (First In Last Out)</h2>
    <ul>
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the top value</li>
        <li>Always display the existing stack content</li>
        <li>Do not use pre-defined PHP array functions like <strong>array_pop</strong></li>
    </ul>
</div>

<?php
    // $stack = [];

    // if(isset($_POST['push'])) {
    //     if(empty($_POST['value'])) {
    //         echo '';
    //     } else {
    //         $stack[] = intval($_POST['value']);
    //     }
    // };

    // if(isset($_POST['pop'])) {
    //     // array_splice($stack, 1);
    // };

    // $t = [];
    // $t[] = 1;
    // $t[] = 2;
    // var_dump($t);
    // echo '<br>';
    // var_dump($stack)
?>

<div class="w-25 mx-auto">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group pb-3">
            <label for="value">Input an Integer:</label>
          <input type="text" class="form-control border-dark" name="value" id="value">
        </div>
        <input type="submit" class="btn btn-primary" name="push" value="Push">
        <input type="submit" class="btn btn-danger" name="pop" value="Pop">
    </form>
    <table class="table table-borderless width mx-auto my-5">
        <tbody>
            <?php 
                $stack = [];

                if(isset($_POST['push'])) {
                    if(empty($_POST['value'])) {
                        echo '';
                    } else {
                        $stack[] = intval($_POST['value']);
                    }
                };
            
                // if(isset($_POST['pop'])) {
                //     array_splice($stack, 1);
                // };

                for($pos = count($stack) - 1; $pos >= 0; $pos--) {
                    if(empty($stack)){
                        echo '';
                    } else {
                        echo '<tr><td class="border border-primary">' . $stack[$pos] . '</td></tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</div>

<?php include '../../components/footer.php' ?>