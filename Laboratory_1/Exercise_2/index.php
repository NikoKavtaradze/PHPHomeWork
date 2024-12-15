<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise_2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="result.php" method="post">
        <header>
            <h1>
                <b>
                    ნიშნების უწყისი
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
                კურსი
            </h3>
            <input type="text" placeholder="კურსი" name="Course">
            <h3>
                სემესტრი
            </h3>
            <input type="number" placeholder="სემესტრი" name="Semester">
            <h3>
                სასწავლო კურსი
            </h3>
            <input type="text" placeholder="სასწავლო კურსი" name="Object">
            <h3>
                მიღებული ნიშანი
            </h3>
            <input type="number" placeholder="მიღებული ნიშანი" name="Score">
        </div>
        <button>
            გაგზავნა
        </button>
    </form>
</body>
</html>