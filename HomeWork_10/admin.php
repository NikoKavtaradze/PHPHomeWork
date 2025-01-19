<?php
require 'db.php';

if (isset($_POST['add_category'])) {
    $name = $_POST['category_name'];
    $stmt = $mysqli->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->bind_param('s', $name);
    $stmt->execute();
}

if (isset($_POST['delete_category'])) {
    $category_id = $_POST['category_id'];
    $stmt = $mysqli->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->bind_param('i', $category_id);
    $stmt->execute();
}

if (isset($_POST['edit_category'])) {
    $category_id = $_POST['category_id'];
    $new_name = $_POST['new_category_name'];
    $stmt = $mysqli->prepare("UPDATE categories SET name = ? WHERE id = ?");
    $stmt->bind_param('si', $new_name, $category_id);
    $stmt->execute();
}

if (isset($_POST['add_product'])) {
    $name = $_POST['product_name'];
    $description = $_POST['product_description'];
    $price = $_POST['product_price'];
    $category_id = $_POST['category_id'];
    $stmt = $mysqli->prepare("INSERT INTO products (name, description, price, category_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssdi', $name, $description, $price, $category_id);
    $stmt->execute();
}

if (isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];
    $stmt = $mysqli->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
}

if (isset($_POST['edit_product'])) {
    $product_id = $_POST['product_id'];
    $new_name = $_POST['new_product_name'];
    $new_description = $_POST['new_product_description'];
    $new_price = $_POST['new_product_price'];
    $stmt = $mysqli->prepare("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?");
    $stmt->bind_param('ssdi', $new_name, $new_description, $new_price, $product_id);
    $stmt->execute();
}

$result = $mysqli->query("SELECT * FROM categories");
$categoryList = $result->fetch_all(MYSQLI_ASSOC);

$query = "SELECT products.*, categories.name AS category_name FROM products JOIN categories ON products.category_id = categories.id";
$result = $mysqli->query($query);
$productList = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <section class="category-management">
        <h2>Category Management</h2>
        <form method="POST">
            <input type="text" name="category_name" placeholder="New Category Name" required>
            <button type="submit" name="add_category">Add Category</button>
        </form>

        <ul class="category-list">
            <?php foreach ($categoryList as $category): ?>
                <li class="category-item">
                    <span class="category-name"><?= htmlspecialchars($category['name']) ?></span>
                    <form method="POST" class="category-form" style="display: inline;">
                        <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
                        <input type="text" name="new_category_name" placeholder="New name" class="category-input">
                        <button type="submit" name="edit_category" class="edit-btn">Edit</button>
                        <button type="submit" name="delete_category" class="delete-btn">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="product-management">
        <h2>Product Management</h2>
        <form method="POST" class="product-form">
            <input type="text" name="product_name" placeholder="Product Name" required>
            <input type="text" name="product_description" placeholder="Product Description" required>
            <input type="number" step="0.01" name="product_price" placeholder="Product Price" required>
            <select name="category_id" required>
                <option value="">Select Category</option>
                <?php foreach ($categoryList as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="add_product">Add Product</button>
        </form>

        <ul class="product-list">
            <?php foreach ($productList as $product): ?>
                <li class="product-item">
                    <span class="product-name"><?= htmlspecialchars($product['name']) ?> (<?= htmlspecialchars($product['category_name']) ?>)</span>
                    <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
                    <p><strong>Price:</strong> $<?= htmlspecialchars($product['price']) ?></p>
                    <form method="POST" class="product-edit-form" style="display: inline;">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <input type="text" name="new_product_name" placeholder="New Name" class="product-input">
                        <input type="text" name="new_product_description" placeholder="New Description" class="product-input">
                        <input type="number" step="0.01" name="new_product_price" placeholder="New Price" class="product-input">
                        <button type="submit" name="edit_product" class="edit-btn">Edit</button>
                        <button type="submit" name="delete_product" class="delete-btn">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <footer>
        <a href="index.php" class="back-btn">Back to Main Page</a>
    </footer>
</body>
</html>
