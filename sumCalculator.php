<?php
// Function to calculate the sum of two numbers
function calculateSum($num1, $num2) {
    return "The sum of " . htmlspecialchars($num1) . " and " . htmlspecialchars($num2) . " is: " . ($num1 + $num2);
}

// Example usage
echo calculateSum(10, 20);
?>
