<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=MaBase;charset=utf8', 'root', 'sti2d');
?>
<!DOCTYPE html>
<html>
<head>
<title>raspbery-graph</title>
</head>
<?php
header("refresh: 1;");
$query = "SELECT * FROM entrees;";
$pdo_select = $pdo->prepare($query);
$pdo_select->execute();  
$NbreData = $pdo_select->rowCount();	
$rowAll = $pdo_select->fetchAll();
$pdo_select->closeCursor();
$pdo->prepare($sql)->execute([$etat]);

?>
<body>
</br>
<center><h1>Raspberry Pi Webserver</h1></center>
	
	<!--Pour changer de page-->
	<form method="get" action="index.php">  
            <input type="submit" style = "font-size: 18 pt" value="index" name="index">
	</form>
	</br>
	<form method="get" action="manu.php">  
	    <input type="submit" style = "font-size: 18 pt" value="manu" name="manu">
	</form>​​​
	</br>
	<form method="get" action="table.php">  
	    <input type="submit" style = "font-size: 18 pt" value="table" name="table">
	</form>​​​
	</br>

<center><p> graph </P></center>

</body>
</html>
