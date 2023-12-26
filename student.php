<?php session_start(); ?>
<!-- database connection -->
<?php include 'connect.php'; ?>
<html>
    <head>
        <title>Survey Page</title>
     <!-- bootstrap links -->
        <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    </head>

    <body>

    <section class="header" id="section1">
        <nav>
           <a href="home.html"><img src="img/IS.png" style="height: 20%; width:20%" /></a>
         
            
            <h1>Internship Survey</h1>
          <!-- navigation links -->
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="home.php" id="hm"><strong>HOME</strong></a></li>
                    <li><a href=""><strong>RESULTS</strong></a></li>
                    <li><a href="contact.php"><strong>CONTACT US</strong></a></li>
                    <li><a href="login.php"><strong>LOGIN</strong></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
</section>

    <section class="survey">
    
     <!--STUDENTS FORM-->
        <form action="action_stud.php" class="student" method="post">
            <p class="question">1. How would you describe this internship experience to others? </p>
            <br><div class="question-answer">
                <input type="radio" id="poor" name="intern_exp" value="poor" required> 
                <label for="poor">Poor</label><br> 
                <input type="radio" id="fair" name="intern_exp" value="fair" required> 
                <label for="fair">Fair</label><br> 
                <input type="radio" id="good" name="intern_exp" value="good" required> 
                <label for="good">Good</label><br> 
                <input type="radio" id="vgood" name="intern_exp" value="vgood" required> 
                <label for="vgood">Very Good</label><br> 
                <input type="radio" id="excellent" name="intern_exp" value="excellent" required> 
                <label for="excellent">Excellent</label><br> 
                
            </div>
<br><br>
            <p class="question">2. How challenging was this internship experience for you?  </p>
            <br><div class="question-answer">
                <input type="radio" id="extremely" name="intern_chal" value="extremely"required> 
                <label for="extremely">Extremely</label><br> 
                <input type="radio" id="very" name="intern_chal" value="very" required> 
                <label for="very">Very</label><br> 
                <input type="radio" id="moderately" name="intern_chal" value="moderately" required> 
                <label for="moderately">Moderately</label><br> 
                <input type="radio" id="slightly" name="intern_chal" value="slightly" required> 
                <label for="slightly">Slightly</label><br> 
                <input type="radio" id="not" name="intern_chal" value="not" required> 
                <label for="not">Not at all</label><br> 
                
            </div>
            <br><br>
            <p class="question">3. How did you feel about your training and mentoring/supervision?  </p>
            <br><div class="question-answer">
                <input type="radio" id="poor" name="intern_train" value="poor" required> 
                <label for="poor">Poor</label><br> 
                <input type="radio" id="fair" name="intern_train" value="fair" required> 
                <label for="fair">Fair</label><br> 
                <input type="radio" id="good" name="intern_train" value="good" required> 
                <label for="good">Good</label><br> 
                <input type="radio" id="vgood" name="intern_train" value="vgood" required> 
                <label for="vgood">Very Good</label><br> 
                <input type="radio" id="excellent" name="intern_train" value="excellent" required> 
                <label for="excellent">Excellent</label><br> 
                
            </div>
            <br><br>
            <p class="question">4. Did the instructor managed classroom time and pace well?  </p>
            <br><div class="question-answer">
                <input type="radio" id="sdisagree" name="time" value="sdisagree" required> 
                <label for="sdisagree">Strongly Disagree</label><br> 
                <input type="radio" id="disagree" name="time" value="disagree" required> 
                <label for="disagree">Disagree</label><br> 
                <input type="radio" id="neutral" name="time" value="neutral" required> 
                <label for="neutral">Neutral</label><br> 
                <input type="radio" id="agree" name="time" value="agree" required> 
                <label for="agree">Agree</label><br> 
                <input type="radio" id="sagree" name="time" value="sagree" required> 
                <label for="sagree">Strongly Agree</label><br> 
                
            </div>
            <br><br>
            <p class="question">5. Did the instructor communicated the course material effectively? </p>
          <br>  <div class="question-answer">
                <input type="radio" id="sdisagree" name="material" value="sdisagree" required> 
                <label for="sdisagree">Strongly Disagree</label><br> 
                <input type="radio" id="disagree" name="material" value="disagree" required> 
                <label for="disagree">Disagree</label><br> 
                <input type="radio" id="neutral" name="material" value="neutral" required> 
                <label for="neutral">Neutral</label><br> 
                <input type="radio" id="agree" name="material" value="agree" required> 
                <label for="agree">Agree</label><br> 
                <input type="radio" id="sagree" name="material" value="sagree" required> 
                <label for="sagree">Strongly Agree</label><br> 
                
            </div>
            <br><br>
            <p class="question">6. Did the instructor encouraged discussions and responded to questions?  </p>
          <br>  <div class="question-answer">
                <input type="radio" id="sdisagree" name="discussion" value="sdisagree" required> 
                <label for="sdisagree">Strongly Disagree</label><br> 
                <input type="radio" id="disagree" name="discussion" value="disagree" required> 
                <label for="disagree">Disagree</label><br> 
                <input type="radio" id="neutral" name="discussion" value="neutral" required> 
                <label for="neutral">Neutral</label><br> 
                <input type="radio" id="agree" name="discussion" value="agree" required> 
                <label for="agree">Agree</label><br> 
                <input type="radio" id="sagree" name="discussion" value="sagree" required> 
                <label for="sagree">Strongly Agree</label><br> 
                
            </div>
            <br><br>
            <p class="question">7.Did the instructor appeared enthusiastic and demonstrated in-depth knowledge of the subject?  </p>
          <br>  <div class="question-answer">
                <input type="radio" id="poor" name="knowledge" value="poor" required> 
                <label for="poor">Poor</label><br> 
                <input type="radio" id="fair" name="knowledge" value="fair" required> 
                <label for="fair">Fair</label><br> 
                <input type="radio" id="good" name="knowledge" value="good" required> 
                <label for="good">Good</label><br> 
                <input type="radio" id="vgood" name="knowledge" value="vgood" required> 
                <label for="vgood">Very Good</label><br> 
                <input type="radio" id="excellent" name="knowledge" value="excellent" required> 
                <label for="excellent">Excellent</label><br> 
                
            </div>
            <br><br>
            <p class="question">8. Tell us about any new skills, techniques, and knowledge you gained through this internship. </p>
            <div class="question-answer">
              <br>  <textarea name="technique" id="skill" cols="100" rows="5" required></textarea>
            </div>
            <br><br>
            <p class="question">9. Looking back, what do you wish you would have known before starting this internship?  </p>
            <div class="question-answer">
             <br>   <textarea name="intern" id="skillknown" cols="100" rows="5" required></textarea>
            </div>
            <br><br>
            <p class="question">10. Would you like to attend more of such internships?  </p>
           <br><div class="question-answer">
                <input type="radio" id="sdisagree" name="attend" value="sdisagree" required> 
                <label for="sdisagree">Strongly Disagree</label><br> 
                <input type="radio" id="disagree" name="attend" value="disagree" required> 
                <label for="disagree">Disagree</label><br> 
                <input type="radio" id="neutral" name="attend" value="neutral" required> 
                <label for="neutral">Neutral</label><br> 
                <input type="radio" id="agree" name="attend" value="agree" required> 
                <label for="agree">Agree</label><br> 
                <input type="radio" id="sagree" name="attend" value="sagree" required> 
                <label for="sagree">Strongly Agree</label><br> 
                
            </div>

            <br><br>
            <div><input type="submit" value="Submit" name="submit" id="submit" class="hero-btn" ></div>
          
            
        </form>
        </section>
     <!-- Footer social media links -->
        <section class="footer">


<div class="icons">
    <b>Social Media Handles</b>
    <a href="https://www.facebook.com/UniversityofDelhi"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="https://twitter.com/univofdelhi"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/univofdelhi/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</div>
</section>

    </body>
</html>