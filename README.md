# PHP Variable Scope Bug

This repository demonstrates a common, subtle bug in PHP related to variable scope within functions and loops. The bug arises from the improper use of variable scope and the passing of arrays by reference.  The `bug.php` file shows the buggy code, while `bugSolution.php` provides a corrected version.

## Bug Description
The primary issue is that the `$modifier` variable in the `calculateValue` function is declared outside the loop and only exists once in memory. Changes to this variable's value within the loop aren't reflected between iterations. Thus each $item will be multiplied by 2 only.

## Solution
The solution involves adjusting the scope of the `$modifier` variable in the `bugSolution.php` example.  This ensures that each iteration of the loop gets its own separate instance of the variable if needed.  Additionally, the example highlights careful considerations when passing arrays by reference to avoid unintended side effects.