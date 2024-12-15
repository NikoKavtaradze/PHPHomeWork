<?php 
    include "QuestionArchive.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>
    <div id="Container">
        <header>
            <h2><b>Quiz</b></h2>
        </header>
        <div id="line"></div>
        <div id="header">
            <div><b>კითხვა</b></div>
            <div class="center-divs"><b>მაქს.ქულა</b></div>
            <div class="Right-divs"><b>პასუხი</b></div>
        </div>
        <form action="Lector.php" method="post">
            <?php
                for($i = 0; $i < count($Questions);$i++){
            ?>
                <div id="content">
                    <div>
                        <?=$Questions[$i]['question']?>
                    </div>
                    <div class="center-divs">
                        <?=$Questions[$i]['point']?>
                    </div>
                    <div class="Right-divs">
                        <?= $Questions[$i]['Student_answer'] ?>
                    </div>
                </div>
            <?php
                }
            ?>
            <?php
                for($j = 0; $j < count($outlineQuestions); $j++){
            ?>  
                <div id="outlineQuestions">
                    <div>
                        <?=$outlineQuestions[$j]["question"]?>
                    </div>
                    <div class="center-divs">
                        <?=$outlineQuestions[$j]["point"]?>
                    </div>
                    <div class="Right-divs">
                        <div id="options">
                            <div class="probableAnswers">
                                <div>
                                    <input type="radio" name="outlineAnswers[<?= $j ?>]" value="<?= $outlineQuestions[$j]['correctAnswer']?>">
                                    <p><?=$outlineQuestions[$j]["correctAnswer"] ?></p>
                                </div>
                                <div>
                                    <input type="radio" name="outlineAnswers[<?= $j ?>]" value="<?= $outlineQuestions[$j]["wrong1"] ?>">
                                    <p><?=$outlineQuestions[$j]["wrong1"]?></p>
                                </div>
                            </div>
                            <div class="probableAnswers">
                                <div>
                                    <input type="radio" name="outlineAnswers[<?= $j ?>]" value="<?= $outlineQuestions[$j]["wrong2"] ?>">
                                    <p><?=$outlineQuestions[$j]["wrong2"] ?></p>
                                </div>
                                <div>
                                    <input type="radio" name="outlineAnswers[<?= $j ?>]" value="<?= $outlineQuestions[$j]["wrong3"] ?>">
                                    <p><?=$outlineQuestions[$j]["wrong3"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php  } ?>
            <label>
                <div id="stInfo">
                    სახელი: <input type="text" name="Student-Name"> გვარი: <input type="text" name="Student-Lastname"> <button>გაგზავნა</button>
                </div>
            </label>
        </form>
        
    </div>
</body>
</html>