<?php 
error_reporting(0);
session_start();
include("classess/etsystem.php");
$crud = new Etstysem();
include "header.php";

$tsoftIds = $_SESSION['tsoftId'];

 $queryss = "SELECT * FROM   tbl_walletsbals where customerId  ='".$tsoftIds."' order by id desc";

$resultss = $crud->getData($queryss);
foreach ($resultss as $key => $row) { 
	$waleetbal += $row['point'];
}
$queryssr = "SELECT * FROM   tbl_transferpoint where customerId  ='".$tsoftIds."' order by id desc";

$resultssr = $crud->getData($queryssr);
foreach ($resultssr as $key => $row) { 
	$tafbal += $row['pay_point'];
}

$totalbal = $waleetbal - $tafbal;
?>
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Wallet Balance
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Please enter Point">
					   
						<input class="input100" type="test" name="pass" placeholder="Point" value="<?php echo $totalbal;?>">
						<span class="focus-input100"></span>
					</div>

				
	<div class="wrap-input100" data-validate="Please enter username">
					&nbsp;
					</div>
					<!--<div class="container-login100-form-btn">-->
					<!--<a href="request_withdraw_funds.php">	<button class="login100-form-btn">-->
					<!--		 Request Withdraw Funds-->
					<!--	</button></a>-->
					<!--</div>-->

					<div class="flex-col-c p-t-40 p-b-10">
					

					&nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>


   <?php include "footer.php"; ?>