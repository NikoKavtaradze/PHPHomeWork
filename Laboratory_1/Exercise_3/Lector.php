<?php
session_start();
$Questions = $_SESSION['Questions'] ?? [];
$outlineQuestions = $_SESSION['outlineQuestions'] ?? [];

$StudentName = htmlspecialchars($_POST['Student-Name'] ?? "");
$StudentSurname = htmlspecialchars($_POST['Student-Lastname'] ?? "");
$Answers = $_POST['answers'] ?? [];
$outlineAnswers = $_POST['outlineAnswers'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="Container">
        <header>
            <h2>Student: <?= $StudentName . " " . $StudentSurname ?></h2>
        </header>
        <div>
            <h3>Submitted Answers</h3>
            <?php foreach ($Questions as $question): ?>
                <div>
                    <p><b>Question:</b> <?= $question['question'] ?></p>
                    <p><b>Answer:</b> <?= htmlspecialchars($Answers[$question['id']] ?? "No Answer") ?></p>
                    <p><b>Max Points:</b> <?= $question['point'] ?></p>
                    <p><b>Enter Score: <input type="number"></b></p>
                </div>
            <?php endforeach; ?>

            <h3>Outline Questions</h3>
            <?php foreach ($outlineQuestions as $index => $outline): ?>
                <div>
                    <p><b>Question:</b> <?= $outline['question'] ?></p>
                    <p><b>Selected Answer:</b> <?= htmlspecialchars($outlineAnswers[$index] ?? "No Answer") ?></p>
                    <p><b>Correct Answer:</b> <?= $outline['correctAnswer'] ?></p>
                    <p><b>Max Points:</b> <?= $outline['point'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <form action="results.php" method="post">
            <button type="submit">Proceed to Results</button>
        </form>
    </div>
</body>
</html>
