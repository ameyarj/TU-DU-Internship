<?php session_start(); ?>
<?php include 'connect.php';
    //   total number of surveys
    $all= "SELECT * FROM user_details" ;
    $res=mysqli_query($conn,$all);
    $totalrow=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Results</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Bootstrap links-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="result.css" rel="stylesheet" />
</head>

<body id="page-top">

    <div class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="mb-5">Thanks&#129309;for taking the Survey</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">&#128512;</span>
                    <h4><strong>धन्यवाद्</strong></h4>
                    <p class="text-faded mb-0">You were great!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">&#128516;</span>
                    <h4><strong>감사합니다</strong></h4>
                    <p class="text-faded mb-0">See you soon!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">&#128519;</span>
                    <h4><strong>Take Care</strong></h4>
                    <p class="text-faded mb-0">
                         Hope you enjoyed!
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3">&#128522;</span>
                    <h4><strong>Bye</strong></h4>
                    <p class="text-faded mb-0">*********</p>
                </div>
            </div>
        </div>
    </div>
    <div class="total"><h2>Total number of responses:<?php echo $totalrow ?></h2></div>
</body>

</html>