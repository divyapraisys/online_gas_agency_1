<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Sara Gas Booking</title>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="CSS/main.css" type="text/css"
	media="screen" />
<script language="javascript" type="text/javascript">
	function check() {
		var l;
		if (document.getElementById("dist").value == "") {
			alert("Please Select Distributor");
			document.getElementById("distributor").focus();
			return false;
		}

		if (document.getElementById("email").value.split(" ").join("") == '') {
			alert("Please enter Email ID");
			document.getElementById("email").focus();
			return false;
		}
		
		if (document.getElementById("consno").value.split(" ").join("") == '') {
			alert("Please Enter Consumer No.");
			document.getElementById("consno").focus();
			return false;
		}

		if (document.getElementById("uname").value.split(" ").join("") == '') {
			alert("Please Enter User name");
			document.getElementById("uname").focus();
			return false;
		}
		
		if(document.getElementById("rpassword").value != document.getElementById("password").value){
		    alert("Password Mismatch");
			document.getElementById("password").focus();
			return false;

		}

		var str = document.getElementById("email").value;
		var at = "@"
		var dot = "."
		var lat = str.indexOf(at)
		var lstr = str.length
		var ldot = str.indexOf(dot)
		if (str.indexOf(at) == -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(at) == -1 || str.indexOf(at) == 0
				|| str.indexOf(at) == lstr) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0
				|| str.indexOf(dot) == lstr) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(at, (lat + 1)) != -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.substring(lat - 1, lat) == dot
				|| str.substring(lat + 1, lat + 2) == dot) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(dot, (lat + 2)) == -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(" ") != -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		var contact_flag = true;
		if (document.getElementById("mobile").value.split(" ").join("") == '') {
			alert("Please provide proper contact information.");
			document.getElementById("mobile").focus();
			return false;
		}

		if (document.getElementById("checkbox1").checked == false) {
			alert("Please accept terms and conditions before submiting.");
			document.getElementById("checkbox1").focus();
			return false;
		}
		return true;
	}
	function check1() {
		var l;
		if (document.getElementById("dist").value == "") {
			alert("Please Select Distributor");
			document.getElementById("distributor").focus();
			return false;
		}

		if (document.getElementById("demail").value.split(" ").join("") == '') {
			alert("Please enter Email ID");
			document.getElementById("demail").focus();
			return false;
		}
		
		if (document.getElementById("distno").value.split(" ").join("") == '') {
			alert("Please Enter Distributor ID");
			document.getElementById("distno").focus();
			return false;
		}

		if(document.getElementById("rdpassword").value != document.getElementById("dpassword").value){
		    alert("Password Mismatch");
			document.getElementById("dpassword").focus();
			return false;

		}

		var str = document.getElementById("demail").value;
		var at = "@"
		var dot = "."
		var lat = str.indexOf(at)
		var lstr = str.length
		var ldot = str.indexOf(dot)
		if (str.indexOf(at) == -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(at) == -1 || str.indexOf(at) == 0
				|| str.indexOf(at) == lstr) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0
				|| str.indexOf(dot) == lstr) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(at, (lat + 1)) != -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.substring(lat - 1, lat) == dot
				|| str.substring(lat + 1, lat + 2) == dot) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(dot, (lat + 2)) == -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		if (str.indexOf(" ") != -1) {
			alert("Invalid E-mail ID");
			return false;
		}

		return true;
	}
</script>
</head>

<body>
	<div class="contact photo-header border-top hero">

		<div class="nav my-sticky-element">
			<div class="logo-holder">
				<a href="index.html"> <span class="s main-logo"><img
						src="images/icon.jpg" width="80px" alt="images.jpg" /> <font
						size="25px">Sara Gas Booking</font></span>
				</a>
			</div>
			<ul class="wrapper">
				<li><a href="index.jsp">Home</a></li>
				<li><a href="LogIn.jsp">Login</a></li>
				<li>Register</li>
				<li><a href="Contact.jsp">Contact</a></li>
				<li><a href="Feedack.jsp">Feedback</a></li>
			</ul>
		</div>
		<br>
		<div class="full-col tac"><h5>
			Register and Booking at your Convenience
			<p>
				Only valid Indane Consumers to register on the site.<br> Please
				ensure you give a correct E-mail ID as each id is mapped to a unique
				user.<br> All future notifications will be sent to this ID
				only.<br> Registration for Preferred Time Delivery can be done
				later in the consumer profile after login to your account.
			</p>
			</h5>
		</div>

	</div>
	<div class="row contact-content" id="cc">

		<div class="full-col tac">
		<div class="about left-col">
			<form action="http://localhost/Register.php" method="post" name="booking" id="booking"
				onSubmit="return check();">
				<table width="98%" border="0" cellspacing="1"
					class="checkStatus_table">
					<tbody>
					<h3>Consumer Registration</h3>
						<tr valign="top">
							<td height="25">Distributor<span style="color:red;">*</span></td>
							<td colspan="2"><select id="dist"
									name="dist" title="distributor" >
										<option value="Ajila Dealers">Ajila Dealers</option>
										<option value="Ayuth Dealers">Ayuth Dealers</option>
										<option value="Danna Dealers">Danna Dealers</option>
										<option value="Fickil Dealers">Fickil Dealers</option>
										<option value="Gokul Dealers">Gokul Dealers</option>
										<option value="Houda Dealers">Houda Dealers</option>
										<option value="Tailor Dealers">Tailor Dealers</option>
										<option value="Udoun Dealers">Udoun Dealers</option>
										<option value="Zigga Dealers">Zigga Dealers</option>
								</select> 
							</td>
						</tr>
						<tr valign="top">
							<td height="25">Consumer No.<span style="color:red;">*</span></td>
							<td colspan="2"><input name="consno" id="consno" type="text"
								title="consumer no." value="" style="width: 80px" maxlength="20"
								class="hasDatepicker" /> <span>[Please write exactly as
									you see it on your last refill cash memo.]</span></td>
						</tr>
						<tr valign="top">
							<td height="25">User Name<span style="color:red;">*</span></td>
							<td colspan="2"><input name="uname" type="text"
								id="uname" title="User Name" value="" maxlength="50"
								class="hasDatepicker" />
								</td>
						</tr>
						<tr valign="top">
							<td height="25">E-mail<span style="color:red;">*</span></td>
							<td colspan="2"><input name="email" id="email"
								type="text" value="" maxlength="70"
								class="hasDatepicker">
							</td>
						</tr>
						<tr valign="top">
							<td height="25">Password<span style="color:red;">*</span></td>
							<td colspan="2"><input name="password" type="password"
								id="password" title="Password" value="" maxlength="50"
								class="hasDatepicker" />
								</td>
						</tr>
						<tr valign="top">
							<td height="25">Re-enter Password<span style="color:red;">*</span></td>
							<td colspan="2"><input name="rpassword" type="password"
								id="rpassword" title="rPassword" value="" maxlength="50"
								class="hasDatepicker" />
								</td>
						</tr>
						<tr height="25px">
							<td width="140px">Address</td>
							<td><textarea rows="4" cols="30" name="address"
								id="address"></textarea> 
							</td>
						</tr>
						<tr height="25px">
							<td>Mobile</td>
							<td>+91&nbsp; <input type="text" name="mobile"
								id="mobile" maxlength="10" size="10"
				                 style="width: 100px;" class="hasDatepicker" />
							</td>
						</tr>
						<tr height="25px">
							<td>&nbsp;</td>
							<td>Terms &amp; Conditions <input name="checkbox1" id="checkbox1"
								type="checkbox" value="checkbox"  />
								Accepted</td>
						</tr>
						<tr height="25px">
							<td><input type="hidden" name="status" value="0"></td>
							<td><input type="submit" value="Submit" name="Submit"
								class="btn" id="submit_btn" /></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
		<div class="i-can right-col">
		<h3>Dealer Registration</h3>
		<form action="http://localhost/DRegister.php" method="post" name="booking" id="booking"
				onSubmit="return check1();">
				<table width="98%" border="0" cellspacing="1"
					class="checkStatus_table">
					<tbody>
						<tr valign="top">
							<td height="25">Distributor<span style="color:red;">*</span></td>
							<td colspan="2"><select id="dist"
									name="dist" title="distributor" >
										<option value="Ajila Dealers">Ajila Dealers</option>
										<option value="Ayuth Dealers">Ayuth Dealers</option>
										<option value="Danna Dealers">Danna Dealers</option>
										<option value="Fickil Dealers">Fickil Dealers</option>
										<option value="Gokul Dealers">Gokul Dealers</option>
										<option value="Houda Dealers">Houda Dealers</option>
										<option value="Tailor Dealers">Tailor Dealers</option>
										<option value="Udoun Dealers">Udoun Dealers</option>
										<option value="Zigga Dealers">Zigga Dealers</option>
								</select> 
							</td>
						</tr>
						<tr valign="top">
							<td height="25">Distributor ID<span style="color:red;">*</span></td>
							<td colspan="2"><input name="distno" id="distno" type="text"
								title="dealer id" value="" style="width: 80px" maxlength="20"
								class="hasDatepicker" /></td>
						</tr>
						<tr valign="top">
							<td height="25">E-mail<span style="color:red;">*</span></td>
							<td colspan="2"><input name="demail" id="demail"
								type="text" value="" maxlength="70"
								class="hasDatepicker">
							</td>
						</tr>
						<tr valign="top">
							<td height="25">Password<span style="color:red;">*</span></td>
							<td colspan="2"><input name="dpassword" type="password"
								id="dpassword" title="DPassword" value="" maxlength="50"
								class="hasDatepicker" />
								</td>
						</tr>
						<tr valign="top">
							<td height="25">Re-enter Password<span style="color:red;">*</span></td>
							<td colspan="2"><input name="rdpassword" type="password"
								id="rdpassword" title="rDPassword" value="" maxlength="50"
								class="hasDatepicker" />
								</td>
						</tr>
						<tr height="25px">
							<td>&nbsp;</td>
							<td>Terms &amp; Conditions <input name="dcheckbox1" id="dcheckbox1"
								type="checkbox" value="checkbox"  />
								Accepted</td>
						</tr>
						<tr height="25px">
							<td><input type="hidden" name="status" value="0"></td>
							<td><input type="submit" value="Submit" name="DSubmit"
								class="btn" id="submit_btn" /></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
		</div>
		
	</div>
</body>
</html>