<?php
/**
 * @since TwentyTwentyOneChild 1.0.001
 */
?>

<?php
	$post = (!empty($_POST)) ? true : false;
	if($post) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$QuantityNumber = $_POST['QuantityNumber']; 
		$to = 'zaqxswsmtpwptest@gmail.com';
		$mes = "Ім'я: ".$name."\n\nМобільний" .$mobile. "\n\nМейл: ".$email. "\n\nЦіна: " .$QuantityNumber."\n\n";
		$sit_url = $_SERVER['SERVER_NAME'];
		$headers = "Content-type: text/html; charset=UTF-8 \r\n";
		$headers .= "From: <wordpress@".$sit_url.">\r\n";
		if( mail ($to,$name,$mes,$headers)) {
				$url = 'http://f98615ga.beget.tech/wp-content/themes/TwentyTwentyOneChild/donesuccess.php';
				wp_redirect($url);
				exit();
		}
		else {
				$url = 'http://f98615ga.beget.tech/wp-content/themes/TwentyTwentyOneChild/doneerror.php';
				wp_redirect($url);
				exit();
		}
	}
?>

<?php get_header(); ?>

				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-10">
							<form name="contactForm" id="regForm" onclick="return validateForm2()" 
								action="<?=$_SERVER['PHP_SELF'];?>" 
								autocomplete="off" method="post">
								<div class="tab">
									<h1>Contact Info</h1>
									<div class="form-group row">
										<label for="name" class="col-md-4">Name</label>
											<div class="col-md-8">
												<input type="text" name="name" class="form-control" id="name"
													title = "поле має містити від 3 до 20 букв" required>
													<div class="error" id="nameErr"></div>
											</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-md-4">Email<sup>&nbsp;required</sup></label>
										<div class="col-md-8">
											<input type="text" name="email" class="form-control" id="email"
												title = "введіть коректний Email" required>
												<div class="error" id="emailErr"></div>
										</div>
									</div>
									<div class="form-group row">
										<label for="phone" class="col-md-4">Phone</label>
										<div class="col-md-8">
											<input type="text" name="mobile" class="form-control col-12" id="mobile"
												title = "поле має містити від 3 до 10 цифр" required>
												<div class="error" id="mobileErr"></div>
										</div>
									</div>
								</div>
								<div class="tab">
									<h2>Quantity</h2>
									<div class="form-group row">
										<label for="QuantityNumber" class="col-md-4">Quantity<sup>&nbsp;required</sup></label>
											<div class="col-md-8">
												<input type="text" name="QuantityNumber" id="QuantityNumber"
													onchange="myFunctionQuantityNumber();" class="form-control" 
													placeholder="ваша очікувана ціна від $1 до $1 000 000"
													pattern="[0-9]{1,6}" title = "ціна має бути в діапазоні 1 до 1 000 000 одиниць" required>	
										</div>
									</div>
								</div>
								<div class="tab">
									<h2>Price</h2>
									<p id="pG">&#36;</p>
								</div>
								<div style="overflow:auto;">
									<div class="butt1">
										<button type="button" class="btn btn-primary btnY" id="prevBtn"
											onclick="nextPrev(-1)">Continue</button>
										<button type="button" class="btn btn-primary btnW" id="nextBtn" 
											onclick="nextPrev(1)">&nbsp;&larr;&nbsp;Back&nbsp;</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<script type="text/javascript" src="/wp-content/themes/TwentyTwentyOneChild/js/script.js"></script>

<?php get_footer(); ?>