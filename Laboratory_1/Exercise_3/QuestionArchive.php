<?php

$Questions = [
    ['id' => 1, 'question' => "რა არის PHP?", 'point' => 8],
    ['id' => 2, 'question' => "რა არის CSS?", 'point' => 7],
    ['id' => 3, 'question' => "რა არის C++?", 'point' => 5],
    ['id' => 4, 'question' => "რა არის SASS?", 'point' => 5],
    ['id' => 5, 'question' => "რა არის HTML?", 'point' => 9],
];

shuffle($Questions);

for ($i = 0; $i < count($Questions); $i++) {
    $id = $Questions[$i]['id'];
    $Questions[$i]['Student_answer'] = "<input type='text' name='answers[$id]'>";
}

$outlineQuestions = [
    ['question' => "What is the capital of France?", 'point' => 5, 'correctAnswer' => "Paris", 'wrong1' => "Berlin", 'wrong2' => "Madrid", 'wrong3' => "Rome", 'name' => "question1"],
    ['question' => "Which planet is known as the Red Planet?", 'point' => 5, 'correctAnswer' => "Mars", 'wrong1' => "Earth", 'wrong2' => "Venus", 'wrong3' => "Jupiter", 'name' => "question2"],
    ['question' => "Who wrote the play Romeo and Juliet?", 'point' => 5, 'correctAnswer' => "William Shakespeare", 'wrong1' => "Charles Dickens", 'wrong2' => "Jane Austen", 'wrong3' => "Mark Twain", 'name' => "question3"]
];


?>