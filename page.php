<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
	.parallax {
    background-image: linear-gradient(rgba(25, 25, 25, 0.65), rgba(0, 0, 0, 0.7)), url(images/5.jpg);
    width: 100%;
    opacity: 0.9;
    min-height: 700px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}
    </style>

</head>

<body class="parallax">


<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
    <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
        <h1 class="mt-4 mb-3" style="color:#fff;"><?php   echo htmlentities($result->PageName); ?> </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" ><?php   echo htmlentities($result->PageName); ?></li>
        </ol>
		
		<p style="color:#fff;">Blood cannot be manufactured in factories; it can only come from generous donors. To cater to this demand, BloodConnect was launched on 1st April, 2010 (as a project under NSS IIT Delhi) with an unparalleled objective of solving the problem of blood shortage in India.</p>
		<p style="color:#fff;"> ‘Blood Bank Information System’ will be an information management system which helps to manage
			the records of donors and patients at a blood bank. The system will allow the authorized blood bank officer to
			login using a secret password and easily manage the records of the blood donors and the patients in need of
			blood.The key features of the system will be the following:</p>
		<p style="color:#fff;">* Centralized database architecture.</p>
		<p style="color:#fff;">* Access to the system secured by login.</p>
		<p style="color:#fff;">* Search facility for finding blood donors based of various search criteria.</p>
		<p style="color:#fff;">* Search facility for finding Patients (acceptors) based of various search criteria.</p>
		<p style="color:#fff;">* Easy addition and updating of donor's details.</p>
		<p style="color:#fff;">* Easy addition and updating of details of acceptors.</p>
		<br><br>
    </div>
    <!-- /.container -->
    <?php } } ?>

    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
