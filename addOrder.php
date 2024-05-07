<?php
include 'db_connect.php'; // Include the database connection file

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST["customer_name"];
    $product_name = $_POST["product_name"];
    $quantity = $_POST["quantity"];
    $total_price = $_POST["total_price"];

    // Insert order into the database
    $sql = "INSERT INTO orders (customer_name, product_name, quantity, total_price) VALUES ('$customer_name', '$product_name', $quantity, $total_price)";

    if (mysqli_query($conn, $sql)) {
        echo "Order added successfully";
    } else {
        echo "Error adding order: " . mysqli_error($conn);
    }
}
?>
