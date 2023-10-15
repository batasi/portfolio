<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MyWork</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="http://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <?php include 'components/user_header.php'; ?>

    <section>
    <div id="portfolio">
            <div class="container">
                <div class="work-list">
                    <div class="work">
                        <img src="images/sd copy.png">
                        <div class="layer">
                            <h3>Hotel Booking Website</h3>
                            <p>
                            Web Application that allows users to book Hotel rooms by use of internet
                            </p>
                            <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/realestate.png">
                        <div class="layer">
                            <h3>Real Estate</h3>
                            <p>
                                The app connects u to different people accross the world
                            </p>
                            <a href="#"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/work-1 copy.png">
                        <div class="layer">
                            <h3>College WebApp</h3>
                            <p>
                            Recently developed College web application. <br>www.venturecollege.co.ke
                            </p>
                            <div class="social-icons">
                                <a href="#"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/calculator.png">
                        <div class="layer">
                            <h3>Simple  Calculator</h3>
                            <p>
                                User Friendly interface that allows users to make accurate calculations.
                            </p>
                            <div class="social-icons">
                                <a href="#"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 2rem; text-align:center;">
                <a href="#" class="inline-btn">See More Soon!</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>