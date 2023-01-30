<?php include '../../components/header.php' ?>

<div class="container mt-3 width mx-auto">
    <h2>Exercise 4: Create a queue of integers using arrays (First In First Out)</h2>
    <ul>
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the old value</li>
        <li>Always display the existing queue content</li>
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
        if (isset($_COOKIE["store_queue"])) {
            $updated_data = $_COOKIE["store_queue"] . ',' . $data;
        } else {
            $updated_data = $data;
        }

        setcookie("store_queue", $updated_data, time() + (86400 * 30), "/");
        header("Location: {$_SERVER['PHP_SELF']}");
    }
};

if (isset($_COOKIE["store_queue"])) {
    $str_data = $_COOKIE["store_queue"];
    $stack = explode(",", $str_data);
}

if (isset($_POST['pop'])) {
    if (isset($_COOKIE["store_queue"])) {
        $stack_spliced = [];
        $str_data = $_COOKIE["store_queue"];
        $stack_splice = explode(",", $str_data);

        $length = count($stack);
        for ($index = 1; $index < $length; $index++) {
            $stack_spliced[] = $stack[$index];
        }
        $stack = $stack_spliced;

        $updated_data = implode(",", $stack);
        setcookie("store_queue", $updated_data, time() + (86400 * 30), "/");
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
            echo '<tr>';
            for ($pos = 0; $pos < count($stack); $pos++) {
                if (empty($stack)) {
                    echo '';
                } else {
                    echo '<td class="border border-primary text-center">' . $stack[$pos] . '</td>';
                }
            }
            echo '</tr>';
            ?>
        </tbody>
    </table>
</div>

<?php include '../../components/footer.php' ?>