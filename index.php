<?php include 'components/header.php' ?>

<?php
$text_class = "text-decoration-none text-dark";
?>

<main class="container">
    <h1 class="text-center mt-3">Timothy Manuel</h1>
    <h3 class="text-center pt-2">Table of Contents</h3>
    <div class="width mx-auto">
        <div class="card">
            <div class="card-header">
                PART 1
            </div>
            <div class="card-body">
                <ul>
                    <li class="text"><a href="exercises/part1/exercise1.php" class="<?php echo $text_class; ?>">Exercise 1: Diamond Pattern</a></li>
                    <li class="text"><a href="exercises/part1/exercise2.php" class="<?php echo $text_class; ?>">Exercise 2: X Pattern</a></li>
                    <li class="text"><a href="exercises/part1/exercise3.php" class="<?php echo $text_class; ?>">Exercise 3: Create the given pattern</a></li>
                    <li class="text"><a href="exercises/part1/exercise4.php" class="<?php echo $text_class; ?>">Exercise 4: Create the given pattern</a></li>
                </ul>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                PART 2
            </div>
            <div class="card-body">
                <ul>
                    <li class="text"><a href="exercises/part2/exercise1.php" class="<?php echo $text_class; ?>">Exercise 1: Generate a random character from a-k</a></li>
                    <li class="text"><a href="exercises/part2/exercise2.php" class="<?php echo $text_class; ?>">Exercise 2: Manipulation of multidimensional array</a></li>
                    <li class="text"><a href="exercises/part2/exercise3.php" class="<?php echo $text_class; ?>">Exercise 3: Create a stack of integers using arrays (First In Last Out)</a></li>
                    <li class="text"><a href="exercises/part2/exercise4.php" class="<?php echo $text_class; ?>">Exercise 4: Create a queue of integers using arrays (First In First Out)</a></li>
                    <li class="text"><a href="exercises/part2/exercise5.php" class="<?php echo $text_class; ?>">Exercise 5: Using a PHP POST method, ask the user to input 2 numbers</a></li>
                    <li class="text"><a href="exercises/part2/exercise6.php" class="<?php echo $text_class; ?>">Exercise 6: Fix the code function</a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php' ?>