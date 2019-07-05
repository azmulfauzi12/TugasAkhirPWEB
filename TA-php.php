<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleTA.css">
	<title>Tugas Akhir Pemrograman Web</title>
</head>
<body>
	<div class="all">
		<div class="header">			
			<h1>TUGAS AKHIR</h1>
			<p>PEMROGRAMAN WEB 2019</p>
		</div>
		<div class="menu">
			<ul>
				<li><a href="http://localhost/Azmul/tugas%20akhir/TA-home.php"><p align="left"></p>Home</a></li>
				<li><a href="http://localhost/Azmul/tugas%20akhir/TA-php.php"><p align="center">PHP</p></a></li>
				<li><a href="http://localhost/Azmul/tugas%20akhir/TA-js.php"><p align="right">Javascript</p></a></li>
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				<ul>
					<li><a href="http://localhost/Azmul/tugas%20akhir/TA-php.php">PHP Upload File</a></li>
					<li><a href="#">PHP Open File</a></li>
					<li><a href="http://localhost/Azmul/tugas%20akhir/TA-php1.php">PHP Input </a></li>
					<li><a href="#">FORM </a></li>				
				</ul>
			</div>
			<div class="content">
				<form action="upload.php" method="post" enctype="multipart/form-data">
					Pilih file untuk diupload : 
					<input type="file" name="fileUpload" id="fileUpload">
					<input type="submit" value="Upload File" name="submit">
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<p> &copy AZMUL FAUZI 2019 </p>
			<p>UNIVERSITAS AHMAD DAHLAN</p>
		</div>
	</div>
</body>
</html>