<?php
    include "QuestionArchive.php";
    
    $StudentName = $_POST['Student-Name'] ?? "";
    $StudentSurname = $_POST['Student-Lastname'] ?? "";
    $Answers = $_POST['answers'] ?? [];
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div id="Container">
        <header>
            <h2><b><label>სტუდენტი - </label><?=$StudentName." ".$StudentSurname?></b></h2>
        </header>
        <div id="line"></div>
        <div id="header">
            <div><b>კითხვა</b></div>
            <div><b>მაქს.ქულა</b></div>
            <div><b>პასუხი</b></div>
            <div><b>შეფასება</b></div>
        </div>
        <form action="Lector.php" method="post">
            <?php
                for($i = 0; $i < count($Questions);$i++){
            ?>
                <div id="content">
                    <div>
                        <?=$Questions[$i]['question']?>
                    </div>
                    <div>
                        <?=$Questions[$i]['point']?>
                    </div>
                    <div>
                        <?php
                            foreach ($Answers as $id => $Answer) {
                                echo htmlspecialchars($Answer);
                            }
                        ?>
                    </div>
                    <div>

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
                    <div>
                        
                    </div>
                </div>
                
            <?php  } ?>
            <label>
                <div id="stInfo">
                    სახელი: <input type="text" name="Student-Name"> გვარი: <input type="text" name="Student_Lastname"> <button>გაგზავნა</button>
                </div>
            </label>
        </form>
        
    </div>
</body>
</html>