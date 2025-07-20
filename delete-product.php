<?php
require_once "./config.php";
session_start();

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $delete = "DELETE FROM products WHERE id = $product_id";
    if (mysqli_query($link, $delete)) {
        echo "<script>
            alert('Product deleted successfully!');
            window.location.href='manage-product.php';
            </script>";
    } else {
        echo "<script>
            alert('Error deleting product');
            window.location.href='manage-product.php';
            </script>";
    }
    exit();
}

header("Location: manage-product.php");
exit();
?>