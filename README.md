# PHP Unexpected Result with Non-Numeric Inputs

This repository demonstrates a subtle bug in a seemingly simple PHP function that returns unexpected results when non-numeric inputs are provided. The `bug.php` file contains the buggy code, while the `bugSolution.php` file offers a corrected version.

## Bug Description
The function `foo` aims to return the larger of two input values. However, it fails to handle cases where the inputs are not numbers, leading to unexpected behavior or errors.  The core issue lies in the loose comparison used in the `if` condition, resulting in incorrect evaluations based on type juggling.