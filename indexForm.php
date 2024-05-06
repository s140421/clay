<html>
    <head>
        <title>Welcome page</title>

        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .welcome{
                text-align : center;
                font-family : Georgia, 'Times New Roman', Times, serif;
            }
            
        </style>

</head>
    <body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
                <img src="logo2.jpg" alt="logo" class="navbar-logo">
                
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active"  href="index.html" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="workshop.html">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="funpage.html">Fun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Questionnaire.html">Questionnaire</a>
                    </li>
                </ul>
            </nav>
        </div>



        <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        ?>

        <br><br>

        <h2 class ="welcome">"Hello, <span style = "color: #91988a; "><?php  echo $name ; ?></span> ! Welcome to a world of endless possibilities.<br>
             Explore our selection of products and services crafted to enrich your life.
            </h2>

            <hr>

            <h3 class = "welcome" >Your Email Adress is: <?php echo $email; ?> <h3>
                
            <br><br><br><br><br><br><br><br><br>
    </body>

    <footer class="footer"></footer>
</html>
