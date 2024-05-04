<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB3700";

// 1. Create DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 2. Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to $dbname<br />";
}

// 3. Create products table with id as primary key
$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(100) NOT NULL
)";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
    echo "Table 'products' created successfully<br />";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// 4. Add products to the database
$products = [
    ['Salad Bowls', 5.50, 'bowl.jpg'],
    ['Latte Cups', 8.00, 'latte.jpg'],
    ['Flower Vase', 8.50, 'flower.jpg'],
    ['Serving Plates', 5.00, 'plates.jpg'],
    ['Gray Jars', 10.00, 'jars.jpg'],
    ['V60 Cups', 5.00, 'V60.jpg'],
    ['Decoration Vases', 25.00, 'vases.jpg'],
    ['Vases', 15.00, 'vases2.jpg'],
    ['Matcha Cups', 7.00, 'matcha.jpg'],
    ['Dinning Table Set', 20.00, 'set.jpg']
];

foreach ($products as $product) {
    $name = $product[0];
    $price = $product[1];
    $image = $product[2];

    // SQL statement to insert product into the "products" table
    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', $price, '$image')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Product '$name' inserted successfully<br />";
    } else {
        echo "Error inserting product: " . mysqli_error($conn);
    }
}

// Close DB connection
mysqli_close($conn);
?>
