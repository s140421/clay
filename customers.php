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

// Create customers table
$sql = "CREATE TABLE IF NOT EXISTS customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table 'customers' created successfully<br />";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Add records to the customers table
$sampleCustomers = [
    ['Mohammed Al-Habsi', 'mohammed@gmail.com', '123456789', 'Muscat, Oman'],
    ['Fatima Al-Said', 'fatima@gmail.com', '987654321', 'Salalah, Oman'],
    ['Abdullah Al-Mahrouqi', 'abdullah@gmail.com', '111222333', 'Nizwa, Oman'],
    ['Aisha Al-Jabri', 'aisha@gmail.com', '444555666', 'Sohar, Oman'],
    ['Salem Al-Abri', 'salem@gmail.com', '777888999', 'Sur, Oman'],
    ['Mariam Al-Rashidi', 'mariam@gmail.com', '000111222', 'Ibri, Oman'],
    ['Khalid Al-Harthy', 'khalid@gmail.com', '333444555', 'Rustaq, Oman'],
    ['Huda Al-Balushi', 'huda@gmail.com', '666777888', 'Barka, Oman'],
    ['Youssef Al-Farsi', 'youssef@gmail.com', '999000111', 'Sohar, Oman'],
    ['Amal Al-Kharusi', 'amal@gmail.com', '222333444', 'Salalah, Oman']
];

foreach ($sampleCustomers as $customer) {
    $customerName = $customer[0];
    $email = $customer[1];
    $phone = $customer[2];
    $address = $customer[3];

    // SQL statement to insert customer into the "customers" table
    $sql = "INSERT INTO customers (customer_name, email, phone, address) VALUES ('$customerName', '$email', '$phone', '$address')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Customer '$customerName' inserted successfully<br />";
    } else {
        echo "Error inserting customer: " . mysqli_error($conn);
    }
}

// Close DB connection
mysqli_close($conn);
?>
