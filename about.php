<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Me</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="http://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

</head>
<body>
   
   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">
         <div class="image">
            <img src="images/one.png" alt="">
         </div>
         <div class="content">
            
               <h3 style="color:#DA2C32;">About MySelf</h3>
               <p>
               
            I'm Currently working on my personal projects.   <br> As a computer scientist with passion in problem 
               solving, I'm seeing a role that will allow me utilize my skills to contribute to the success of a 
               dynamic and innovative organization.
               </p>

               <div class="tab-tittles">
                  <p class="tab-links active-link" onclick="opentab('skills')"><b>Skills</b></p>  
                  <p class="tab-links" onclick="opentab('experiences')"><b>Experiences</b></p>  
                  <p class="tab-links" onclick="opentab('education')"><b>Education</b></p>  
               </div>

               <div class="tab-contents active-tab" id="skills">
                  <ul>
                     <li><span>UI/UX</span>Designing Web/App interfaces</li>
                     <li><span>Web Developer</span>Designing Web applications</li>
                     <li><span>Programmer</span>Using C++ & C languages</li>
                  </ul>
               </div>

               <div class="tab-contents" id="experiences">
                  <ul>
                     <li><span>Currently</span>Designing Web/App interfaces,<br>Web applications<br>&<br>Using C++  &  C languages</li>
                     <li><span>Sept-Oct 2023</span>Profiling & Mapping of <br> Agricultural Chain Actors <br>Ministry of Agriculture & Livestock</li>
                     <li><span>2022</span>ICT officer Huduma Center <br>Nyamira</li>
                  </ul>
               </div>

               <div class="tab-contents" id="education">
                  <ul>
                     <li><span>2023</span>BSc App Comp Sci - Chuka Uni</li>
                     <li><span>April 2019</span>IC3 - St Anns</li>
                     <li><span>2018</span>KCSE - Menyenya High</li>
                     <li><span>2014</span>KCPE - Sironga Pri</li>
                  </ul>
               </div>
               <a href="cv.pdf" download class="inline-btn">Download CV</a>
               <a href="contact.php" class="inline-btn" style="margin-left:10px;">contact Me</a>
         </div>
      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>
</html>