<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=MaBase;charset=utf8', 'root', 'sti2d');
?>
<!DOCTYPE html>
<html>
<head>
<title>raspbery</title>
</head>
<?php
header("refresh: 1;");
$query = "SELECT * FROM entrees ORDER BY Date DESC LIMIT 5;";
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
	<form method="get" action="table.php">  
            <input type="submit" style = "font-size: 18 pt" value="table" name="table">
	</form>
	</br>
	<form method="get" action="manu.php">  
	    <input type="submit" style = "font-size: 18 pt" value="manu" name="manu">
	</form>​​​
	</br>
	<form method="get" action="graph.php">  
	    <input type="submit" style = "font-size: 18 pt" value="graph" name="graph">
	</form>​​​
	</br>
	
	<center><form method="get" action="index.php">
	    <!--Bouton delete--> 
	    <input type="submit" style = "font-size; 18pt" value="delete" name="delete">
	    <input type="submit" style = "font-size; 18pt" value="press once reseted" name="reset">
	</form></center>
<?php 
     if(isset($_GET['delete']))
            {
                        echo "Tableau vidé";
		        $sql = "DELETE FROM entrees";
			$pdo->prepare($sql)->execute();	
            }
?>

<!--Tableau--> 
<table  border=1 cellspacing=4 cellpadding=4 width=60%>
	<thead>
	    <tr>
		<!--nom des colones --> 
		<th>sonde 1 (A0)</th>
		<th>sonde 2 (A2)</th>
		<th>sonde 3 (A4)</th>
		<th>Date</th>		
	    </tr>
	</thead>
    
	<tbody>	    
	    <?php
	    foreach ( $rowAll as $row ) 
	    {
	    ?>
		<tr> 
		    <!--valeurs--> 
		    <td><?php echo $row['sonde1']; ?></td>
		    <td><?php echo $row['sonde2']; ?></td>
		    <td><?php echo $row['sonde3']; ?></td>
		    <td><?php echo $row['date']; ?></td>
		</tr> 
	    <?php
	    } 
	    ?>	 
	</tbody>

</body>
</html>
