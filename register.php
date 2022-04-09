
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
				<a href="index.php"><div class="option">Menu</div></a>
				<a href="login.php"><div class="option">Zaloguj</div></a>
				<div style="clear:both"></div>
			</div>
			
			 <div id="wpis" align="center">
        <form action="reg.php" method="POST">
        <fieldset style="width:400px" > 
            <legend align="center">Wprowadz swoje dane</legend>
		<table>
		<tr >
			<td><label for="login">Login:</label></td>
			<td><input type="text" name="login" /></td>
		</tr>
		<tr>
			<td><label for="haslo">Hasło:</label></td>
			<td ><input type="password" name="haslo" /></td>
				<tr >
			<td><label for="mail">Mail</label></td>
			<td><input type="text" name="mail" /></td>
		</tr>
		<tr >
			<td><label for="NS">Imię i Nazwisko:</label></td>
			<td><input type="text" name="NS" /></td>
		</tr>
        <td><input type="submit" value="Zajerestruj"  /></td>
		</tr>
		</table>
        </fieldset>
        </form>
        </div>
			<div id="footer">
				Wykonał Grzegorz Orłowski 198720 s198720@sggw.edu.pl
			</div>
		</div>	
</body>
</html>



