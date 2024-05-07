<?php
include 'db_connect.php'; // Include the database connection file

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_number = $_POST["order_number"];

    // Delete order from the database
    $sql = "DELETE FROM orders WHERE order_number = $order_number";

    if (mysqli_query($conn, $sql)) {
        echo "Order deleted successfully";
    } else {
        echo "Error deleting order: " . mysqli_error($conn);
    }
}
?>
