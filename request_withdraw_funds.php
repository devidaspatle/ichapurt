<?php 
error_reporting(0);
session_start();
include("classess/etsystem.php");
$crud = new Etstysem();
$tsoftId = $_SESSION['tsoftId'];
include "header.php";
?>
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="classess/request_withdraw_funds_code.php">
					<span class="login100-form-title">
					Request Withdraw Funds
					</span>
                     <input  type="hidden" name="customerId" value="<?php echo $tsoftId; ?>">
				

					<div class="wrap-input100 validate-input" data-validate = "Please enter Point">
					   <input class="input100" type="text" name="point" placeholder="Request Withdraw Funds Point" required="required">
				 
						<span class="focus-input100"></span>
					</div>

				
	<div class="wrap-input100" data-validate="Please enter username">
					&nbsp;
					</div>
					<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="PointData">
							 Request Withdraw Funds
						</button>
					</div>

					<div class="flex-col-c p-t-40 p-b-10">
					

					&nbsp;
					</div>
				</div>
			</from>
		</div>
	</div>


   <?php include "footer.php"; ?>
