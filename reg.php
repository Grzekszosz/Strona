<?php
$b=false;
$con=mysqli_connect('localhost','admin','System2020','Base')       
    or die ("Nie działa połączenie do bazy! :c");
$log=$_POST["login"];
$pas=$_POST["haslo"];
$name=$_POST["NS"];
$mail=$_POST["mail"];
echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Wracaj tu.</a>';
$q = mysqli_query($con,"SELECT * FROM Users") 
or die('Błąd zapytania'); 
while($r = mysqli_fetch_array($q)) 
{     
    if($r['Login']==$log)
    {
        $b=true;
    }
}  
if($b==true)
{
    ?>
        <script language="javascript">
            alert("Podany login już istnieje w bazie");
        </script>
    <?php  
}
else 
{
    if($log==NULL||$pas==NULL)
    {
        ?>
            <script language="javascript">
                alert("Ej ale bez oszukiwania mi tam! Sprawdź czy wszystko dobze wpisałeś.");
            </script>
        <?php  
    }
    else
    {
        $add="INSERT INTO `Users` ( `Login`, `Haslo`, `NameSurname`, `Mail`) VALUES ('$log', '$pas', '$name', '$mail');";    
        if (mysqli_query($con, $add)) 
        {
            ?>
                <script language="javascript">
                    alert("Dane zostały poprawnie wprowadzone. Dziękuję.");
                </script>
            <?php  
        } 
        else 
        {
            ?>
                <script language="javascript">
                    alert("ERRROR");
                </script>
            <?php  
        }
    }
}
mysqli_close($con);
?>
