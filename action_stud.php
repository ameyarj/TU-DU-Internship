<?php session_start();  

   $uname = $_SESSION['name'];
   $email =  $_SESSION['mail'];

    include 'connect.php';
    if(isset($_POST['submit'])){
    extract ($_POST);

  
    
    $sql = "INSERT INTO student_response (user_name, user_email,Q1_exprns,Q2_chllng,Q3_sprvson,Q4_pacetime,Q5_cmmuncte,Q6_instrepnse,Q7_instknwlg,Q8_new,Q9_knonbfr,Q10_moreintrns) VALUES('$uname','$email','$intern_exp','$intern_chal' ,'$intern_train','$time','$material','$discussion','$knowledge','$technique','$intern','$attend')";
    if(mysqli_query($conn,$sql))

    {
       
     header('location: result.php');
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    }

?>
