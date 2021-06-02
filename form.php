<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Template by Anshita</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './themepart/menu.php';
include './themepart/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="img.jpg" width="920" height="450" alt="" /></div>
		<div id="content">
                    <div class="post">
				<h2 class="title"><a href="#">Anshita's gallery </a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                   
					<form method="post">
						<table align="center">
							<tr>
								<td>Name :</td>
								<td><input type="text" name="txt1" /> <br/> <br/></td>
							</tr>
							<tr>
								<td>Email : </td>
								<td><input type="email" name="txt2" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Mobile : </td>
								<td><input type="Number" name="txt3" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Password : </td>
								<td><input type="password" name="txt4" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Date of Birth : </td>
								<td><input type="date" name="txt5" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Gender : </td>
								<td><select name="txt6">
									<option value="Male">Male</option>
									<option value="Female">Female</option></select></td>
							</tr>
							<tr>
								<td>Blood Group : </td>
								<td><input type="text" name="txt7" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Address : </td>
								<td><textarea name="txt8" cols="50" rows="5"></textarea><br/> <br/></td>
							</tr>
							<tr>
								<td>Area : </td>
								<td><input type="text" name="txt9" /><br/> <br/></td>
							</tr>
							<tr>
								<td>Pincode : </td>
								<td><input type="Number" name="txt10"><br/> <br/></td>
							</tr>
							<tr>
								<td><input type="submit" /></td>
								<td><input type="reset" /></td>
							</tr>
						</table>
					</form>
				
				</div>
			
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
                include './themepart/sidebar.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
                include './themepart/footer.php';
?>
<!-- end #footer -->
</body>
</html>

<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection_1 = mysqli_connect($host, $username, $passwd, $dbname);

if ($_POST) {
	$name  = $_POST['txt1'];
	$email = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	$passwd = $_POST['txt4'];
	$dob = $_POST['txt5'];
	$gender = $_POST['txt6'];
	$bgrp = $_POST['txt7'];
	$address = $_POST['txt8'];
	$area = $_POST['txt9'];
	$pincode = $_POST['txt10'];

	$q = mysqli_query($connection_1,
		"insert into tbl_student(st_name,st_email,st_mobile,st_passwd,st_dob,st_gender,st_bgrp,st_address,st_area,st_pincode) 
		values('{$name}','{$email}','{$mobile}','{$passwd}','{$dob}','{$gender}','{$bgrp}','{$address}','{$area}','{$pincode}')") 
		or die("Error". mysqli_error($connection_1));

	if($q){
		echo"<script>alert('Record Added');</script>";
	}
}
?>