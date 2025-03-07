<?php
function fetchReadme($githubUsername, $repoName) {
    $readmeUrl = "https://raw.githubusercontent.com/" . htmlspecialchars($githubUsername) . "/" . htmlspecialchars($repoName) . "/main/README.md";
    
    $readmeContent = file_get_contents($readmeUrl);
    
    if ($readmeContent === false) {
        return "Error: Unable to fetch README.md.";
    }
    
    return nl2br(htmlspecialchars($readmeContent));
}

// Example usage
echo fetchReadme("Reeba-CS", "PHP-Learning");
?>
