<html>
    <head>
        <style>
            .display{
                text-align : center;
                font-family : Georgia, 'Times New Roman', Times, serif;
            }
        </style>
    </head>
    <body>
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
                        ?>
                        <h2 class = "display"> Product Name: <span style="color: #91988a;"> <?php echo $row["name"] ?> </span> </h2> <br>
                        <h2 class = "display"> Price: <span style="color: #91988a;"> <?php echo $row["price"] ?> </span> </h2> <br> <br>
                    <?php
                    }
                } else {
                    echo "<h2 class = 'display'> Sorry! No products found</h2>";
                }

                // Close the database connection
                $conn->close();
            }
        }
    ?>
    </body>
</html>
