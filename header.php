<?php
/*
 * @since TwentyTwentyOneChild 1.0.001
 */
?>
 
<!DOCTYPE HTML>
<html>
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php bloginfo('name'); ?> <?php wp_title("", true); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="child тема TwentyTwentyOne"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <?php wp_head(); ?>
 </head>
 <body>
	<main class="main">
		<div class="gray col-sm-12 col-md-10 ml-auto mr-auto">
			<div class="gray col-sm-11 col-md-10 ml-auto mr-auto">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-9">
							<nav class="navbar navbar-expand-md bg-light">
								<ul class="navbar-nav w-100 nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
									</li>
									<li class="nav-item">
										<span class="step"><a class="nav-link" href="#">Contact Info</a></span>
									</li>
									<li class="nav-item">
										<span class="step"><a class="nav-link" href="#">Quantity</a></span>
									</li>
									<li class="nav-item">
										<span class="step"><a class="nav-link" href="#">Price</a></span>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="done.php">Done</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>