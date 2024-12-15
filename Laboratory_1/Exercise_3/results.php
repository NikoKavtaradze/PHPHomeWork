<?php
session_start();
$Questions = $_SESSION['Questions'] ?? [];
$outlineQuestions = $_SESSION['outlineQuestions'] ?? [];

session_destroy(); // Clear session data after results are displayed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="Container">
        <header>
            <h2>Quiz Results</h2>
        </header>
        <div>
            <h3>Grading Summary</h3>
            <p>You can now process the results and assign grades based on the points and answers provided.</p>
        </div>
    </div>
</body>
</html>
