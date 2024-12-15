<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BankTransaction</title>
    <style>
        body{
            background-color: rgb(123, 123, 123);
            display: flex;
            justify-content: center;

            form{
                background-color: rgb(155, 155, 155);
                padding: 18px;
                border-radius: 8px;
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
            
        }
    </style>
</head>
<body>
    <form action="Includes/formhandler.php" method="POST">
        <h1>Sign Up User</h1>
        <input type="text" placeholder="Enter Name" name="name">
        <input type="text" placeholder="Enter Surname" name="surname">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Enter Password" name="password">
        <button>Sign Up</button>
    </form>
</body>
</html>