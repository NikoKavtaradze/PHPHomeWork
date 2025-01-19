<?php
include 'db.php';

$query = "SELECT * FROM categories";
$response = $mysqli->query($query);

$categoryItems = [];
if ($response) {
    while ($data = $response->fetch_assoc()) {
        $categoryItems[] = $data;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css"> 
    <title>Category List</title>
</head>
<body>
    <header>
        <h1>Available Categories</h1>
    </header>
    <section class="category-list">
        <ul>
            <?php foreach ($categoryItems as $category): ?>
                <li class="item"><a href="category.php?id=<?= $category['id'] ?>" class="category-link"><?= htmlspecialchars($category['name']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <footer class="admin-area">
        <a href="admin.php" class="admin-button">Admin Panel</a>
    </footer>
</body>
</html>
