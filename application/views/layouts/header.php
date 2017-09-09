<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="public/css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header class="mdc-toolbar">
	  	<div class="">
	  	  	<section class="mdc-toolbar__section--align-start">
	  	  	 	<h1 class="logo"><a href="<?php echo base_url(); ?>">DocInWay</a></h1>
	  	  	 	<a class="btn-login" href="">
	  	  	 		Iniciar sesión
	  	  	 		<img src="<?php echo img_url().'icons/account.svg' ?>" alt="">
	  	  	 	</a>
	  	  	</section>
	  </div>
</header>
