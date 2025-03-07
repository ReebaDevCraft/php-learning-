<?php
function greetUser($name, $githubUsername, $repoName) {
    return "Hello, " . htmlspecialchars($name) . "! Welcome to PHP. Check out my GitHub: https://github.com/" . htmlspecialchars($githubUsername) . "/" . htmlspecialchars($repoName);
}

// Example usage
echo greetUser("Reeba", "your-github-username", "your-repo-name");
?>
