<?php session_start();

    include 'connect.php';
    if(isset($_POST['submit'])){
    extract ($_POST);
    
    $_SESSION['name']=$name;
    $_SESSION['mail']=$mail;
    $sql = "INSERT INTO user_details (u_name,u_email,university,profession) VALUES('$name','$mail' ,'$uni','$pro')";
    if(mysqli_query($conn,$sql))
    {
      echo $pro;
      if ($pro == "Student"){
        header('location: student.php');
      } 
      else{
        header('location: teacher.php');
      }
    }
    else{
        echo "Error".mysqli_error($conn);
    }
    }

?>
