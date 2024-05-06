<html>
    <head>
        <title>Questionnaire form</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            h3{
                text-align :center;
                font-family : 'Caveat';
            }

            table{
                border-collapse: collapse;
                width: 50%; 
                margin: 0 auto; 
                border: 1px solid black;
            }

            th, td {
            padding: 10px;
            text-align: center;
            }

            th {
            background-color: lightgray;
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
        //recieve the entered information by the user in the Questionnare page
        $userName = $_POST["name"];
        $userEmail = $_POST["email"];
        $userPass = $_POST["password"];
        $selectedGender = $_POST["gender"];
        $age = $_POST["age"];
        $services= $_POST["services"];
        $feedback = $_POST["feedback"];

        ?>

        <!--display a massage that we got their inquiries Successfully-->
        <h3 >We have Recieved your Feedback Successfully</h3>

        <hr>

        <!--display all the recieved infotmation to the user in a table-->
        <table border = "border" callspacing = "15px">
            <tr>
                <th>Your name: </th>
                <td> <?php echo $userName; ?></td>
            </tr>

            <tr>
                <th>Your email: </th>
                <td> <?php echo $userEmail; ?></td>
            </tr>

            <tr>
                <th>You are: </th>
                <td> <?php echo $selectedGender; ?></td>
            </tr>

            <tr>
                <th>Your age is: </th>
                <td> <?php echo $age; ?></td>
            </tr>

            <tr>
                <th>Your selected services: </th>
                <td>
                 <?php 
                    echo $services; ?>
                    </td>
            </tr>

            <tr>
                <th>Your Feedback: </th>
                <td> <?php echo $feedback ; ?></td>
            </tr>
        </table>


    </body>


    <br><br><br><br> <br><br><br><br>
    <footer class="footer"></footer>
</html>
