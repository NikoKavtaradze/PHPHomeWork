<?php
include 'db.php';

$categoryId = $_GET['id'] ?? 0;

$query = "SELECT * FROM products WHERE category_id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $categoryId); 
$stmt->execute();

$resultSet = $stmt->get_result();
$productArray = [];

while ($productData = $resultSet->fetch_assoc()) {
    $productArray[] = $productData;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Products in Category</title> 
</head>
<body>
    <header>
        <h1>Products in This Category</h1> 
    </header>

    <section class="product-list">
        <ul>
            <?php foreach ($productArray as $product): ?>
                <li class="product-item">
                    <h2 class="product-title"><?= htmlspecialchars($product['name']) ?></h2>
                    <p class="product-description"><?= htmlspecialchars($product['description']) ?></p> 
                    <p class="product-price">Price: $<?= htmlspecialchars($product['price']) ?></p> 
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    
    <footer>
        <a href="index.php" class="back-link">Back to Categories</a>
    </footer>
</body>
</html>
