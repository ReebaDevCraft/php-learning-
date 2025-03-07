<?php
function greetUser($name) {
    return "Hello, " . htmlspecialchars($name) . "! Welcome to PHP.";
}

// Example usage
echo greetUser("Reeba");
?>
