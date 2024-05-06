<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the search query is set
    if (isset($_POST["search_query"])) {
        // Get the search query from the form
        $searchQuery = $_POST["search_query"];

        // Connect to database
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "DB3700"; 

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        $sql = "SELECT * FROM products WHERE name LIKE '%$searchQuery%'";

        // Execute the query
        $result = $conn->query($sql);

        // Check if any products are found
        if ($result->num_rows > 0) {
            // Output the products
            while($row = $result->fetch_assoc()) {
                echo "Product Name: " . $row["name"] . "<br>";
                echo "Price: " . $row["price"] . "<br><br>";
            }
        } else {
            echo "No products found";
        }

        // Close the database connection
        $conn->close();
    }
}
?>
