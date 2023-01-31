<?php include '../../components/header.php' ?>

<div class="container mt-3 width mx-auto">
    <h2>Exercise 6: Fix the code function to output the correct result. <strong>Explain your answer</strong> </h2>
    <ul>
        <li>Create input fields and push a button to insert a new value</li>
        <li>Create a pop button to remove the top value</li>
        <li>Always display the existing stack content</li>
        <li>Do not use pre-defined PHP array functions like <strong>array_pop</strong></li>
    </ul>

    <div class="row">
        <div class="col-12 col-md-6">
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

        <div class="col-12 col-md-6">
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
            <div class="accordion mb-3" id="explanation">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Explanation
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#explanation">
                        <div class="accordion-body">
                            The exchanging of values of the current and next element of the array <code>$lists</code> on the if block is where the code went wrong. The value of $temp is right, but the value of <code>$lists[$child]</code> and <code>$lists[$child + 1]</code> references to the same value which is the original value of <code>$lists[$child + 1]</code>.
                            <br>
                            <br>
                            So these are the steps I made the code right:
                            <ol>
                                <li>The value of <code>$temp</code> is correct so there is no need to change it.
                                </li>
                                <li>Store the value of the current array element <code>$lists[$child]</code> to the next array element <code>$lists[$child + 1]</code>.</li>
                                <li>Store the value of the temporary variable <code>$temp</code> to the current element of the array <code>$lists[$child]</code></li>
                                <li>Add the return value <code>$lists</code> outside the for loops.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../components/footer.php' ?>