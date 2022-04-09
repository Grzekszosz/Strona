        <?php
		$login=$_POST["login"];
		$haslo=$_POST["haslo"];
            $con=mysqli_connect('localhost','admin','System2020','Base')     
            or die ("Nie działa połączenie do bazy! :c");
            $q = mysqli_query($con,"SELECT * FROM Users") 
                or die('Błąd zapytania');
            while($r = mysqli_fetch_array($q)) 
            {     
                    if($login==$r['Login']&&$haslo==$r['Haslo'])
                    {
						?>
						<script language="javascript">
							alert("Zalogowano poprawnie");
						</script>	 			
						<?php
						session_start();
						$_SESSION['zalogowany']=true;
						$_SESSION['login'] = $r['Login'];
						$_SESSION['SN']   = $r['NameSurname'];
						header("Location: cars.php".SID);

                    }
					else
						$prawda=true;
            }  
			if($prawda==true)
			{
				?>
					<script language="javascript">
							alert("Zly login lub haslo");
					</script>
				<?php  
				mysqli_close($con);
				//header("Location: register.php");

			}	
            mysqli_close($con);
        ?>
