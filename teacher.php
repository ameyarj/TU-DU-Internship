<?php session_start(); ?>
<?php include 'connect.php'; ?>
<html>
<head>
    <title>Survey Page</title>

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
           <a href="FP1.html"><img src="img/IS.png" style="height: 20%; width:20%" /></a>
         
            
            <h1>Internship Survey</h1>
          
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

    <!--TEACHERS FORM-->
    <form action="action_teac.php" class="teacher" method="post">
        <p class="question">1. How much interactive were the students throughout the internship programme? </p>
        <br><div class="question-answer">
            <input type="radio" id="poor" name="interactive" value="poor" required>
            <label for="poor">Poor</label><br>
            <input type="radio" id="fair" name="interactive" value="fair" required>
            <label for="fair">Fair</label><br>
            <input type="radio" id="good" name="interactive" value="good" required>
            <label for="good">Good</label><br>
            <input type="radio" id="vgood" name="interactive" value="vgood" required>
            <label for="vgood">Very Good</label><br>
            <input type="radio" id="excellent" name="interactive" value="excellent" required>
            <label for="excellent">Excellent</label><br>

        </div>
<br><br>
        <p class="question">2. What was your experience while interacting with students of other university with
            different cultural background? </p>
        <br><div class="question-answer">
            <input type="radio" id="poor" name="experience" value="poor" required>
            <label for="poor">Poor</label><br>
            <input type="radio" id="fair" name="experience" value="fair" required>
            <label for="fair">Fair</label><br>
            <input type="radio" id="good" name="experience" value="good" required>
            <label for="good">Good</label><br>
            <input type="radio" id="vgood" name="experience" value="vgood" required>
            <label for="vgood">Very Good</label><br>
            <input type="radio" id="excellent" name="experience" value="excellent">
            <label for="excellent">Excellent</label><br>

        </div>
<br><br>
        <p class="question">3. How much do you find this internship programme beneficial for students? </p>
       <br> <div class="question-answer">
            <input type="radio" id="extremely" name="benefits" value="extremely" required>
            <label for="extremely">Extremely</label><br>
            <input type="radio" id="very" name="benefits" value="very">
            <label for="very">Very</label><br>
            <input type="radio" id="moderately" name="benefits" value="moderately" required>
            <label for="moderately">Moderately</label><br>
            <input type="radio" id="slightly" name="benefits" value="slightly" required>
            <label for="slightly">Slightly</label><br>
            <input type="radio" id="not" name="benefits" value="not" required>
            <label for="not">Not at all</label><br>

        </div>
<br><br>
        <p class="question">4. Were proper resources provided by both the university's head? </p>
      <br>  <div class="question-answer">
            <input type="radio" id="rarely" name="resources" value="rarely" required>
            <label for="extremely">Extremely</label><br>
            <input type="radio" id="sometimes" name="resources" value="sometimes" required>
            <label for="sometimes"></label>Sometimes</label><br>
            <input type="radio" id="moderately" name="resources" value="moderately" required>
            <label for="moderately">Moderately</label><br>
            <input type="radio" id="frequently" name="resources" value="frequently" required>
            <label for="frequently">Frequently</label><br>
            <input type="radio" id="consistently" name="resources" value="consistently" required>
            <label for="consistently">Consistently</label><br>

        </div>
<br><br>
        <p class="question">5. Was all the information provided by the team beforehand? </p>
     <br>   <div class="question-answer">
            <input type="radio" id="sdisagree" name="info" value="sdisagree" required>
            <label for="sdisagree">Strongly Disagree</label><br>
            <input type="radio" id="disagree" name="info" value="disagree" required>
            <label for="disagree">Disagree</label><br>
            <input type="radio" id="neutral" name="info" value="neutral" required>
            <label for="neutral">Neutral</label><br>
            <input type="radio" id="agree" name="info" value="agree" required>
            <label for="agree">Agree</label><br>
            <input type="radio" id="sagree" name="info" value="sagree" required>
            <label for="sagree">Strongly Agree</label><br>

        </div>
<br><br>
        <p class="question">6. Did staff of both the university's treat each other with respect? </p>
     <br>   <div class="question-answer">
            <input type="radio" id="sdisagree" name="staff" value="sdisagree" required>
            <label for="sdisagree">Strongly Disagree</label><br>
            <input type="radio" id="disagree" name="staff" value="disagree" required>
            <label for="disagree">Disagree</label><br>
            <input type="radio" id="neutral" name="staff" value="neutral" required>
            <label for="neutral">Neutral</label><br>
            <input type="radio" id="agree" name="staff" value="agree" required>
            <label for="agree">Agree</label><br>
            <input type="radio" id="sagree" name="staff" value="sagree" required>
            <label for="sagree">Strongly Agree</label><br>

        </div>
<br><br>
        <p class="question">7. To what level did this internship programme impact your professional development?
        </p>
     <br>   <div class="question-answer">
            <input type="radio" id="extremely" name="development" value="extremely" required>
            <label for="extremely">Extremely</label><br>
            <input type="radio" id="very" name="development" value="very" required>
            <label for="very">Very</label><br>
            <input type="radio" id="moderately" name="development" value="moderately" required>
            <label for="moderately">Moderately</label><br>
            <input type="radio" id="slightly" name="development" value="slightly" required>
            <label for="slightly">Slightly</label><br>
            <input type="radio" id="not" name="development" value="not" required>
            <label for="not">Not at all</label><br>

        </div>
<br><br>
        <p class="question">8. How much challenging was this internship programme for you? </p>
      <br>  <div class="question-answer">
            <input type="radio" id="extremely" name="challenge" value="extremely" required>
            <label for="extremely">Extremely</label><br>
            <input type="radio" id="very" name="challenge" value="very" required>
            <label for="very">Very</label><br>
            <input type="radio" id="moderately" name="challenge" value="moderately" required>
            <label for="moderately">Moderately</label><br>
            <input type="radio" id="slightly" name="challenge" value="slightly" required>
            <label for="slightly">Slightly</label><br>
            <input type="radio" id="not" name="challenge" value="not" required>
            <label for="not">Not at all</label><br>

        </div>
<br><br>
        <p class="question">9. How did you motivated the students who were not much interactive during the
            lecture? </p>
     <br>   <div class="question-answer">
            <textarea name="interact" id="motivate" cols="100" rows="5" required></textarea>
        </div>
<br><br>
        <p class="question">10. How much satisfied you are overall with this internship programme? Give your
            comments. </p>
      <br>  <div class="question-answer">
            <textarea name="satisfied" id="intern_prog" cols="100" rows="5" required></textarea>
        </div>


        <br><br>
        <div><input type="submit" value="Submit" name="submit" id="submit" class="hero-btn"></div>


    </form>

</section>

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

