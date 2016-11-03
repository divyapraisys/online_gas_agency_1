<?php
  include('session.php');
  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Sara Gas Booking</title>
<link rel="stylesheet" href="main.css" type="text/css"
	media="screen" />
<style>
input[type=submit] {
	border-radius: 5px;
	border: 0;
	width: 90px;
	height: 30px;
	font-family: Tahoma;
	background: #bbffbb;
}
</style>
</head>
<body>
	<div class="home photo-header border-top hero">

		<div class="sticky-wrapper" style="height: 36px;">
			<div class="nav my-sticky-element">
				<div class="logo-holder">
					<span class="s main-logo"><img src="icon.jpg"
						width="80px" alt="images.jpg" /> <font size="25px">Sara
							Gas Booking</font></span>
				</div>
				<ul class="wrapper">
					<li><a href="http://localhost/Logout.php">Logout</a></li>
					<li><a href="http://localhost/CLogin.php">Home</a></li>
					<li>My Profile</li>
					<li><a href="http://localhost:8080/OnlineGasAgency/Feedback.jsp">Feedback</a></li>
				</ul>
				<h3>
				Hi<i>
			    <?php echo $login_session; ?>
					</i>
			</h3>
			</div>
		</div>
		<div class="full-col tac">
 			
			<?php include('viewProfile.php'); ?>
 		</div>
	</div>

	
	<div class="row intro">
      <?php
			  include 'viewTer.php';
			  ?>
		<div class="full-col">
		
		<h5>Transfer of lpg connection</h5>
		
			<form id="form" action='profedit.php' method="post" enctype="multipart/form-data">
				<p>
					<font size=4px>Transfer Termination Voucher(TTV): </font><input type="file" name='photo' id="photo"><br>
					Fill in your <a href="Loss-Of-Termination-Voucher-Transfer-Termination-Voucher.pdf">Transfer Termination Voucher(TTV)</a> form and upload it here.
				</p>
				<p>
					<font size=4px>DGCC booklet (Domestic gas consumer card): </font><input type="file" name='photoo' id="photo1">
				</p>
				<p>
					<font size=4px>Proof of Residence: </font><input type="file" name='photot' id="photo2">
				</p>
				<p>
					<font size=4px>New Address: </font><input type="text" id="address"
						style="height: 25px" name="address">
				</p>
				<input type="submit" value="Register">
			</form>
		</div>

	</div>

</body>
</html>