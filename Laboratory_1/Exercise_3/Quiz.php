<?php
session_start();

$Questions = [
    ['id' => 1, 'question' => "რა არის PHP?", 'point' => 8],
    ['id' => 2, 'question' => "რა არის CSS?", 'point' => 7],
    ['id' => 3, 'question' => "რა არის C++?", 'point' => 5],
    ['id' => 4, 'question' => "რა არის SASS?", 'point' => 5],
    ['id' => 5, 'question' => "რა არის HTML?", 'point' => 9],
];

if (!isset($_SESSION['Questions'])) {
    shuffle($Questions);
    $_SESSION['Questions'] = $Questions;
} else {
    $Questions = $_SESSION['Questions'];
}

$outlineQuestions = [
    ['question' => "What is the capital of France?", 'point' => 5, 'correctAnswer' => "Paris", 'wrong1' => "Berlin", 'wrong2' => "Madrid", 'wrong3' => "Rome"],
    ['question' => "Which planet is known as the Red Planet?", 'point' => 5, 'correctAnswer' => "Mars", 'wrong1' => "Earth", 'wrong2' => "Venus", 'wrong3' => "Jupiter"],
    ['question' => "Who wrote the play Romeo and Juliet?", 'point' => 5, 'correctAnswer' => "William Shakespeare", 'wrong1' => "Charles Dickens", 'wrong2' => "Jane Austen", 'wrong3' => "Mark Twain"]
];

$_SESSION['outlineQuestions'] = $outlineQuestions;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Input Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="Container">
        <header>
            <h2><b>Quiz Input Page</b></h2>
        </header>
        <form action="lector.php" method="post">
            <?php foreach ($Questions as $question): ?>
                <div>
                    <label><?= $question['question'] ?> (Max Points: <?= $question['point'] ?>)</label>
                    <input type="text" name="answers[<?= $question['id'] ?>]" placeholder="Your answer">
                </div>
            <?php endforeach; ?>

            <?php foreach ($outlineQuestions as $index => $outline): ?>
                <div>
                    <p><?= $outline['question'] ?> (Max Points: <?= $outline['point'] ?>)</p>
                    <?php
                    $options = [$outline['correctAnswer'], $outline['wrong1'], $outline['wrong2'], $outline['wrong3']];
                    shuffle($options);
                    foreach ($options as $option):
                    ?>
                        <label>
                            <input type="radio" name="outlineAnswers[<?= $index ?>]" value="<?= $option ?>"> <?= $option ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

            <div>
                <label>Student Name:</label>
                <input type="text" name="Student-Name" required>
                <label>Student Surname:</label>
                <input type="text" name="Student-Lastname" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
