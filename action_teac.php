<?php session_start();

    $tname= $_SESSION['name'];
    $temail =  $_SESSION['mail'];  
     
    include 'connect.php';
    if(isset($_POST['submit'])){
    extract ($_POST);
   
    
    $sql = "INSERT INTO teacher_response (user_name, user_email,TQ1_intractv,TQ2_exprns,TQ3_bnft,TQ4_resrce,TQ5_infrmtn,TQ6_repct,TQ7_prfsndvlp,TQ8_challng,TQ9_motivte,TQ10_satisfctn) VALUES('$tname','$temail','$interactive','$experience' ,'$benefits','$resources','$info','$staff','$development','$challenge','$challenge','$challenge')";
    if(mysqli_query($conn,$sql))
    {
     
     header('location: result.php');
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    }

?>
