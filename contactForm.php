<html>
    <head>
        <title>
            contact form
        </title>
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
        //recieve the entered data by the users
        $name = $_POST["name"];
        $email = $_POST["email"];
        $inquiries = $_POST["inquiries"];

        ?>
        <!--display a massage that we got their inquiries Successfully-->
        <h3 >We have Recieved your inquiries Successfully</h3>

        <hr>

        <!--display the users entered information and the inquiries on a table-->
        <table border = "border" callspacing = "15px">
            <tr style = "align : center;">
                <th>Your name: </th>
                <td><?php echo $name;  ?> </td>
            </tr>

            <tr style = "align : center;">
                <th>Your Email <br> Adress: </th>
                <td> <?php echo $email; ?> </td>
            </tr>

            <tr style = "align : center;">
                <th>Your inquiries: </th>
                <td> <?php echo $inquiries; ?> </td>
            </tr>
        </table>
    </body>
    <br><br><br><br><br><br><br><br> <br> <br> <br>
    <footer class="footer"></footer>
</html>
