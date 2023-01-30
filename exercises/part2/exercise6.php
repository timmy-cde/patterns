<?php include '../../components/header.php' ?>

<div class="container mt-3 width mx-auto">
    <h2>Exercise 6: Fix the code function to output the correct result. <strong>Explain your answer</strong> </h2>
    <ul>
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the top value</li>
        <li>Always display the existing stack content</li>
        <li>Do not use pre-defined PHP array functions like <strong>array_pop</strong></li>
    </ul>
</div>

<div class="container">
    <h6>Code to Fix:</h6>
    <div class="width">
        <pre><code>
function bubbleSort($lists) {
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child + 1];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
}
        </code></pre>
    </div>
</div>

<div class="container">
    <h6>Fixed Code:</h6>
    <div class="width">
        <pre><code>
function bubbleSort($lists) {
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child + 1];
                $lists[$child + 1] = $lists[$child];
                $lists[$child] = $temp;
            }
        }
    }
    return $lists;
}
        </code></pre>
    </div>
</div>


<?php
function bubbleSort($lists)
{
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child + 1];
                $lists[$child + 1] = $lists[$child];
                $lists[$child] = $temp;
            }
        }
    }
    return $lists;
}
?>

<p>The exchanging of values of the current and next element of the array $lists on the if block is where the code went wrong. These are the steps I take to make the code right:

    1. Create a temporary variable and store the value of the next element of the array to it.
    2. Store the value of the current array element to the next array element.
    3. Store the value of the temporary variable to the current element of the array.
    4. Add the return value $lists outside the for loops.</p>

<?php include '../../components/footer.php' ?>