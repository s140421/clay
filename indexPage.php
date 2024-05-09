<html>
    <head>
        <title>Clay'</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>

            /*Style of table border*/
            table{
                
                
                border-width: 2px;
                margin: 0 auto; margin: 0 auto; 
                margin-right: 30px;
                max-width: 100%;
            }

            /* Style for the moving text banner */
            .moving-banner {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #f2f2f2;
                overflow: hidden;
                animation: moveBanner 20s linear infinite; 
            }

            @keyframes moveBanner {
                0% {
                    transform: translateX(100%);
                }
                100% {
                   transform: translateX(-100%);
                }
            }

            .gallery {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 700px;
                overflow: hidden;
                border: 2px solid #ddd;
                margin: 20px auto;
            }
  
            .gallery img {
                width: 100%;
                height: auto;
                display: none; 
            }

        </style>

    </head>
    
        
    <body>
           
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
                <img src="logo2.jpg" alt="logo" class="navbar-logo">
                
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active"  href="indexPage.php" >Home</a>
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
        


        <br>
        <div class="headerpage" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url(home.jpg);">
           <h1 class="clay" style="font-size:200px;color:#ede7db;  text-align: center; ">Clay'</h1>
           <br>
           <p style = "color:#ede7db; text-align: center; font-size: 20px;">Welcome to Clay' where every piece tells a story </p>
        </div>
        <hr>
        <div>
            <h1 style="text-align: center; font-size: 80px ;font-family: 'Caveat', sans-serif; color: #91988a ">Workshops</h1>
            <br> <br> <br>
        </div> 
        <?php 
    

        //a workshop class
        class workshop{
            //each workshop has:
            public $image;
            public $name;
            public $link;


            //Constuctor to inialize the workshop objects
            public function __construct($image, $name, $link){
                $this->image = $image;
                $this->name = $name;
                $this->link = $link;
            }

            //function to create a button for the workshop
            public function createButton() {
                $btn = '<button type="button" class="btn btn-outline-dark" onclick="window.location.href=\'' . $this->link . '\'">' . $this->name . '</button>';
                return $btn;
            }

            
        }
        //array of object to maintain all rows in the workshop table (3 workshops -> 3 objects)
            $workshops = [
                new workshop('pexels-ksenia-chernaya-3965526.jpg','Kids Workshop','workshop.html#kids'),
                new workshop('image copy.png','Group Workshop','workshop.html#group'),
                new workshop('pexels-anastasia-shuraeva-5566939.jpg','Individual Workshop','workshop.html#individual')
            ];


            //function to display the content of the table using the workshops array of objects
            function displayTable($workshops) {
                echo '<div id="workshop-container" style="display: flex; justify-content: center; margin-left: 50px;text-align: center;">';
                // Iterate over the workshops objects
                foreach ($workshops as $workshop) {
                    echo '<div style="margin: 60px;">';
                    echo '<img src="' . $workshop->image . '" alt="' . $workshop->name . '" height="300px" width="320px">';
                    echo '<div style="margin-top: 10px;>';
                    echo $workshop->createButton();
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }
        ?>

        <?php 
        //call display table function to display the workshops table
        displayTable($workshops); ?>
        
        <script>
        

            function search() {
                // Get the search query from the input field
                const query = document.getElementById('search-input').value.toLowerCase();

                // Perform the search operation on the array (e.g., products or workshops)
                const searchResults = workshops.filter(workshops => workshops.name.toLowerCase().includes(query));

                // Display search results or perform other actions as needed
                displaySearchResults(searchResults);
                }

            function displaySearchResults(results) {
                const searchResultsContainer = document.getElementById('search-results');
                searchResultsContainer.innerHTML = '';

                results.forEach(result => {
                const resultItem = document.createElement('div');
                resultItem.textContent = result.name;
                searchResultsContainer.appendChild(resultItem);
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
            populateWorkshopTable();
            });

        </script>
        
        <table id="workshop-table" style="margin-left: 50px; display: flex; justify-content: center;" cellpadding = 10>
            <tbody>
            
            </tbody>
        </table>

        <br>
        <hr>

        <div>
            <h1 style="text-align: center; font-size: 80px ;font-family: 'Caveat', sans-serif; color: #91988a ">Shop</h1>
            <br> <br> <br>
        </div>

        <div class="gallery">
            <img src="photo1.jpg" alt="Photo 1">
            <img src="photo2.jpg" alt="Photo 2">
            <img src="photo3.jpg" alt="Photo 3">
            <img src="photo4.jpg" alt="Photo 4">
        </div>
          
        <script>
            // JavaScript for rotating photos in the gallery
            const images = document.querySelectorAll('.gallery img');
            let currentIndex = 0;
          
            function showImage(index) {
              // Hide all images
              images.forEach(image => image.style.display = 'none');
              // Show the image at the specified index
              images[index].style.display = 'block';
            }
          
            function rotateGallery() {
              // Show the next image
              currentIndex = (currentIndex + 1) % images.length;
              showImage(currentIndex);
            }
          
            // Initial setup: show the first image and start rotating
            showImage(currentIndex);
            setInterval(rotateGallery, 3000); // Rotate every 3 seconds
        </script>

        <hr>
        <br> <br>
        <div style="text-align: center;">
            <a href="shop.html">
            <button type="button"class="btn btn-outline-secondary">All Products</button>
            </a>
        </div>
        <br> <br>
        <hr>

        <br>
        
        <div style="text-align: center;">
            <form onsubmit="search(); return false;">
                <input type="text" id="search-input" placeholder="Search...">
                <button type="submit" class="btn btn-outline-dark">Search</button>
            </form>
        </div>
        <br>

        
        <div id="search-results" style="text-align: center;"></div>
        <br>
        <div style="background-color: #f2f2f2; ">
            <table >
                <tr style="width: 100%;">
                    <td style="width: 10%;">
                        <div style="margin-right:30px; margin-left: 10px;">
                            <a href="contact.html" style=" font-size: x-large; color: black; font-family: 'Georgia', sans-serif;">Contact</a>
                            <br> <br>
                            <a href="about.html" style=" font-size: x-large; color: black; font-family: 'Georgia', sans-serif;">About Us</a>
                            <br> <br>
                            <a href="https://www.google.com/maps/place/Sultan+Qaboos+University/@23.5912263,58.1695517,17z/data=!3m1!4b1!4m6!3m5!1s0x3e8de2c15540870d:0x2ce06efa9952a6e!8m2!3d23.5912214!4d58.1721266!16zL20vMDcybmgx?entry=ttu" 
                           style=" font-size: x-large; color: black;font-family: 'Georgia', sans-serif;">Location</a>
                            <br> <br>
                            <a href="https://www.instagram.com/" style="color: black; font-size: 32px; margin-right: 10px; text-decoration: none;">
                                 <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://web.whatsapp.com/" style="color: black; font-size: 32px; margin-right: 10px; text-decoration: none;">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.pinterest.com/" style="color: black; font-size: 32px; margin-right: 10px; text-decoration: none;">
                                <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                            </a>
                            <br>
                        </div>
                    </td>


                    <td style="width: 10%;"> 
                        <table style="margin-left: 10px;">
                            <tr>
                                <td>
                                    <p style=" font-size:55px ;font-family: 'Caveat', sans-serif; color: #060606 ; margin-right: 210px;">Sign in: </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form action="indexForm.php" method="post">
                                        <div class="mb-3 mt-3">
                                            <label for="email">Name: </label>
                                            <input type="text" class="form-control" placeholder="Enter your name:" name="name" style="width: 350px;" required>
                                            
                                        </div>

                                        <div class="mb-3 mt-3">
                                            <label for="email">Email: </label>
                                            <input type="email" class="form-control" placeholder="Enter email" name="email" style="width: 350px;" required>
                                        </div>
                    
                                        <div class="mb-3">
                                            <label for="password">Password: </label>
                                            <input type="password" class="form-control" placeholder="Enter password" name="password" style="width: 350px;" required>
                                        </div>
                                        <button type="submit" class="btn btn-outline-secondary">Submit</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>

            </td>
            </tr>
            </table>

        </div>
        <div class="moving-banner">
            <p style="font-size: 24px; padding: 10px;">
                Welcome to Clay' website! Today is <span id="current-date"></span>, and the time is <span id="current-time"></span>
            </p>
        </div>
    
    
        <!-- JavaScript to update current date and time -->
        <script>
            // Function to update current date and time
            function updateTime() {
                const currentDate = new Date().toLocaleDateString('en-US', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                const currentTime = new Date().toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
                document.getElementById('current-date').textContent = currentDate;
                document.getElementById('current-time').textContent = currentTime;
            }
    
            // Update current date and time every second
            setInterval(updateTime, 1000);
    
            // Call updateTime function initially to display current date and time
            updateTime();
        </script>
     </body>
    
    
        <footer class="footer"></footer>
        
</html>
    </body>
</html>
