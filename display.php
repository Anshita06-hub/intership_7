<html>
	<head>
		<title>Template by Anshita</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<style type="text/css">
			td {
				width: 300px;
				align-items: center;
			}
		</style>
	</head>
<body>
<?php 
	
include './themepart/menu.php';
include './themepart/logo.php';
?>
<div id="wrapper"> 
	<div id="page-bgtop"></div>
		<div id="page">
			  <div><img src="img.jpg" width="920" height="450" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to View Registrations Page</a></h2>
				<p class="meta"><span class="date">june 2, 2021</span><span class="posted">Posted by <a href="#">Anshita</a></span></p>
			<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<?php 
					$host = "localhost";
					$username = "root";
					$passwd = "";
					$dbname = "db_internship";

					$connection_1 = mysqli_connect($host, $username, $passwd, $dbname);

					$q = mysqli_query($connection_1,
						"select * from tbl_student where is_delete = 0") or die("Error". mysqli_error($connection_1));

					echo "<table border='1px' style='border-style: solid; border-width: 2px'>";
					echo "<tr>";
					echo "<td>Name</td>";
					echo "<td>Email</td>";
					echo "<td>Mobile</td>";
					echo "<td colspan='2'>Action</td>";
					echo "</tr>";
					
					while ($row = mysqli_fetch_array($q)) {
						echo "<tr>";
						echo "<td>{$row['st_name']}</td>";
						echo "<td>{$row['st_email']}</td>";
						echo "<td>{$row['st_mobile']}</td>";
						echo "<td><a href='delete.php?deleteid={$row['st_id']}'> Delete </a></td>";
						echo "<td><a href='view.php?viewid={$row['st_id']}'> Details </td>";
						echo "</tr>";
					}
					echo "<tr><td><a href='displayall.php'> Full Details </a></td></tr>";
					echo "</table>";
				?>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<?php
			include './themepart/sidebar.php';
		?>
		<div style="clear: both;">&nbsp;</div>
		</div>
	<div id="page-bgbtm"></div>
</div>
<?php 
	include './themepart/footer.php';
?>
</body>
</html>