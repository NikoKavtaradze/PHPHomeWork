<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="result.php" method="get">
        <header>
            <h1>
                <b>
                    სახელფასო უწყისი
                </b>
            </h1>
        </header>
        <div id="content">
            <h3>
                სახელი
            </h3>
            <input type="text" placeholder="სახელი" name="Name">
            <h3>
                გვარი
            </h3>
            <input type="text" placeholder="გვარი" name="Last-name">
            <h3>
                თანამდებობა
            </h3>
            <input type="text" placeholder="თანამდებობა" name="Position">
            <h3>
                ხელფასი
            </h3>
            <input type="number" placeholder="ხელფასი" name="Salary">
        </div>
        <button>
            გაგზავნა
        </button>
    </form>
</body>
</html>