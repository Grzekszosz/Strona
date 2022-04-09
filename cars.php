<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8">
	<meta http-equiv ="X-UA-Compatible" content="IE=edge">
	<link rel ="stylesheet" href="cs.css" type="text/css">
	<title>Projekt</title>
</head>
<body>
		<div id="container" >
			<div id="ava">
				<img src ="images/logo.jpg">
			</div>
			<div id = "tekst">
				<h1>Wypożyczalnia samochodów</h1>
				<h2>Orłowski-Auto</h2>
			</div>
			<div id="menu">
				<a href="login.php"><div class="option">Zaloguj</div></a>
				<a href="register.php"><div class="option">Zajerestruj</div></a>
				<div style="clear:both"></div>
			</div>
			<div id="wpis">
				<?php
					session_start();
					$b=false;
					print ("Witaj " .$_SESSION['SN']."<br>");
					$con=mysqli_connect('localhost','admin','System2020','Base');   
					$q = mysqli_query($con,"SELECT * FROM Cars")
					or die('Błąd zapytania');
					while($r = mysqli_fetch_array($q))
					{
						echo '<img src="data:image/jpeg;base64, '.base64_encode( $r['Foto'] ).' "width="300" height="200"/>';
						echo '<br>'.$r['Marka'].' '.$r['Model'].'<br>'.$r['Info'].'<br>';
						if ($r['RequestFor']==NULL)
						{
							echo '<p margin="10">Do wypożyczenia</p>'.'<br>';
						}
						else
						{
							echo '<p margin="10">Do wypożyczenia</p>'.'<br>';
						}
					}
					 
				?>
			</div>
			<div id="footer">
				Wykonał Grzegorz Orłowski 198720 s198720@sggw.edu.pl
			</div>
		</div>	
</body>
</html>


