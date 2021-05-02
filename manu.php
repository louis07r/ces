<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=MaBase;charset=utf8', 'root', 'sti2d');
?>
<!DOCTYPE html>
<html>
<head>
<title>raspbery-manu</title>
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
        <form method="get" action="graph.php">  
	    <input type="submit" style = "font-size: 18 pt" value="graph" name="graph">
	</form>​​​
	</br>
	<form method="get" action="table.php">  
	    <input type="submit" style = "font-size: 18 pt" value="table" name="table">
	</form>​​​
	</br>
		
	<center><form method="post" action="script.php">
		<!--temperature-->
	    <input type="submit" style = "font-size; 18pt" value="Automate" name="Automate">
	    <input type="submit" style = "font-size; 18pt" value="50°c" name="50">
	    <input type="submit" style = "font-size; 18pt" value="60°c" name="60">
	    </br></br>
	    <!--Bouton reflecteur--> 
	    <input type="submit" style = "font-size; 18pt" value="+reflecteur" name="+reflecteur">
	    <input type="submit" style = "font-size; 18pt" value="-reflecteur" name="-reflecteur">
	    <input type="submit" style = "font-size; 18pt" value="stop-reflecteur" name="stop-reflecteur">
	    </br></br>
	    <!--Bouton pompe--> 
	    <input type="submit" style = "font-size; 18pt" value="p1-ON" name="p1-ON">
	    <input type="submit" style = "font-size; 18pt" value="p1-OFF" name="p1-OFF">
	    </br></br>
	    <input type="submit" style = "font-size; 18pt" value="p2-ON" name="p2-ON">
	    <input type="submit" style = "font-size; 18pt" value="p2-OFF" name="p2-OFF">
	    </br></br>
	     <!--Bouton gâche--> 
	    <input type="submit" style = "font-size; 18pt" value="Open-gache" name="Open-gache">
	    <input type="submit" style = "font-size; 18pt" value="Close-gache" name="Close-gache">
	    </br></br>
	     <!--Bouton appoint--> 
	    <input type="submit" style = "font-size; 18pt" value="Start-appoint" name="Start-appoint">
	    <input type="submit" style = "font-size; 18pt" value="Stop-appoint" name="Stop-appoint">
	    
	</form></center>

</body>
</html>
