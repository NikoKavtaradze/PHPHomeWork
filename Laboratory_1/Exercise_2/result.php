<?php
    $name = $_POST['Name'];
    $lastName = $_POST['Last-name'];
    $course = $_POST['Course'];
    $semester = $_POST['Semester'];
    $object = $_POST['Object'];
    $score = $_POST['Score'];

    function CalculateScore($score){
        if($score >= 90 && $score <= 100){
            echo "A";
        }elseif($score >= 80 && $score < 90){
            echo "B";
        }elseif($score >= 70 && $score < 80){
            echo "C";
        }elseif($score >= 60 && $score < 70){
            echo "D";
        }elseif($score >= 50 && $score < 60){
            echo "E";
        }else{
            echo "F ვერ გაიარეთ საგანი";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="">
        <table>
            <tr>
                <th>სახელი</th>
                <th>გვარი</th>
                <th>კურსი</th>
                <th>სემესტრი</th>
                <th>სასწავლო კურსი</th>
                <th>მიღებული ნიშანი</th>
                <th>შეფასება</th>
            </tr>
            <tr>
                <td><?=$name?></td>
                <td><?=$lastName?></td>
                <td><?=$course?></td>
                <td><?=$semester?></td>
                <td><?=$object?></td>
                <td><?=$score?></td>
                <td><?=CalculateScore($score)?></td>
            </tr>
        </table>
    </form>
</body>
</html>