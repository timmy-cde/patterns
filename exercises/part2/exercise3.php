<?php include '../../components/header.php' ?>

<div class="container mt-3 width mx-auto">
    <h2>Exercise 3: Create a stack of integers using arrays (First In Last Out)</h2>
    <ul>
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the top value</li>
        <li>Always display the existing stack content</li>
        <li>Do not use pre-defined PHP array functions like <strong>array_pop</strong></li>
    </ul>
</div>

<?php
$stack = [];
if (isset($_POST['push'])) {

    if (empty($_POST['value'])) {
        null;
    } else {
        $data = $_POST['value'];
        $updated_data;
        if (isset($_COOKIE["store"])) {
            $updated_data = $_COOKIE["store"] . ',' . $data;
        } else {
            $updated_data = $data;
        }

        setcookie("store", $updated_data, time() + (86400 * 30), "/");
        header("Location: {$_SERVER['PHP_SELF']}");
    }
};

if (isset($_COOKIE["store"])) {
    $str_data = $_COOKIE["store"];
    $stack = explode(",", $str_data);
}

if (isset($_POST['pop'])) {
    if (isset($_COOKIE["store"])) {
        $stack_spliced = [];
        $str_data = $_COOKIE["store"];
        $stack = explode(",", $str_data);

        $length = count($stack);
        for ($index = 0; $index < $length - 1; $index++) {
            $stack_spliced[] = $stack[$index];
        }
        $stack = $stack_spliced;

        $updated_data = implode(",", $stack);
        setcookie("store", $updated_data, time() + (86400 * 30), "/");
        header("Location: {$_SERVER['PHP_SELF']}");
    }
};
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
            for ($pos = count($stack) - 1; $pos >= 0; $pos--) {
                if (empty($stack)) {
                    echo '';
                } else {
                    echo '<tr><td class="border border-primary text-center">' . $stack[$pos] . '</td></tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php include '../../components/footer.php' ?>