<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Todo </title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
   
<?php include('include/header.php');?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">Dashboard</h1>

   <div class="box-container">

   <section class="dashboard">

<h1 class="title">Dashboard</h1>

<div class="box-container">

   <div class="box">

               <h3>$755/-</h3>
      <p>Pagamentos Pendentes </p>

   </div>

   <div class="box">

               <h3>$44/-</h3>
      <p>Pagamentos Completos</p>

   </div>

   <div class="box">

               <h3>3</h3>
      <p>Encomendas Feitas</p>
      
   </div>

   <div class="box">
               <h3>8</h3>
      <p>Produtos Adicionados</p>
   </div>

   <div class="box">
               <h3>4</h3>
      <p>Usuarios Normais</p>
   </div>

   <div class="box">
               <h3>1</h3>
      <p>Administradores</p>
   </div>

   <div class="box">
               <h3>5</h3>
      <p>Contas no Site</p>
   </div>

   <div class="box">
               <h3>0</h3>
      <p>Mensagens Novas</p>
   </div>

</div>



</section>

<!-- admin dashboard section ends -->









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>


</script>
</body>
<?php } ?>
