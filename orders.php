<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB3700";

// Create DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to $dbname<br />";
}

// Create orders table
$sql = "CREATE TABLE IF NOT EXISTS orders (
    order_number INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'orders' created successfully<br />";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Add records to the orders table
$sampleOrders = [
    ['Mohammed Al-Habsi', 'Salad Bowls', 2, 11.00],
    ['Fatima Al-Said', 'Latte Cups', 3, 24.00],
    ['Abdullah Al-Mahrouqi', 'Flower Vase', 1, 8.50],
    ['Aisha Al-Jabri', 'Serving Plates', 4, 20.00],
    ['Salem Al-Abri', 'Gray Jars', 2, 20.00],
    ['Mariam Al-Rashidi', 'V60 Cups', 3, 15.00],
    ['Khalid Al-Harthy', 'Decoration Vases', 1, 25.00],
    ['Huda Al-Balushi', 'Dinning Table Set', 2, 40.00],
    ['Youssef Al-Farsi', 'Matcha Cups', 3, 21.00],
    ['Amal Al-Kharusi', 'Tea Set', 1, 15.00]
];

foreach ($sampleOrders as $order) {
    $customerName = $order[0];
    $productName = $order[1];
    $quantity = $order[2];
    $totalPrice = $order[3];

    // SQL statement to insert order into the "orders" table
    $sql = "INSERT INTO orders (customer_name, product_name, quantity, total_price) VALUES ('$customerName', '$productName', $quantity, $totalPrice)";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Order for '$productName' by '$customerName' inserted successfully<br />";
    } else {
        echo "Error inserting order: " . mysqli_error($conn);
    }
}

// Close DB connection
mysqli_close($conn);
?>
