<?php
    $name = $_GET['Name'];
    $lastName = $_GET['Last-name'];
    $position = $_GET['Position'];
    $salary = $_GET['Salary'];
    $tax = $salary / 5;
    $salaryOnHand = $salary - $tax;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <table>
            <tr>
                <th>
                    სახელი
                </th>
                <th>
                    გვარი
                </th>
                <th>
                    თანამდებობა
                </th>
                <th>
                    ხელფასის რაოდენობა
                </th>
                <th>
                    საშემოსავლო
                </th>
                <th>
                    დარიცხული ხელფასი
                </th>
            </tr>
            <tr>
                <td>
                    <?=$name?>
                </td>
                <td>
                    <?=$lastName?>
                </td>
                <td>
                    <?=$position?>
                </td>
                <td>
                    <?=$salary?>
                </td>
                <td>
                    <?=$tax?>
                </td>
                <td>
                    <?=$salaryOnHand?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>