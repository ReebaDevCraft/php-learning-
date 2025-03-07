<?php
// Function to greet the user and provide their GitHub repository link
function greetUser($name, $githubUsername, $repoName) {
    return "Hello, " . htmlspecialchars($name) . "! Welcome to PHP. Check out my GitHub: <a href='https://github.com/" . htmlspecialchars($githubUsername) . "/" . htmlspecialchars($repoName) . "' target='_blank'>" . htmlspecialchars($repoName) . "</a>.";
}

// Example usage
echo greetUser("Reeba", "your-github-username", "your-repo-name");
?>
