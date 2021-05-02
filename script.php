 <?php
	#+ reflecteur(29)
	system("gpio -g mode 18 out");
	#- reflecteur(23)
	system("gpio -g mode 23 out");
	if($_POST['+reflecteur']=='+reflecteur')
            {
	    system("gpio -g write 18 1");
	    system("gpio -g write 23 0");
	    }
	if($_POST['-reflecteur']=='-reflecteur')
            {
	    system("gpio -g write 16 1");
	    system("gpio -g write 23 0");
	    }
	if($_POST['stop-reflecteur']=='stop-reflecteur')
            {
	    system("gpio -g write 18 0");
	    system("gpio -g write 23 0");
	    }
	    
	    
	#pompe 1 (2)
	system("gpio -g mode 2 out");
	if($_POST['p1-ON']=='p1-ON')
            {
	    system("gpio -g write 2 1");
	    }
	if($_POST['p1-OFF']=='p1-OFF')
            {
	    system("gpio -g write 2 0");
	    }
	    
        #pompe 2 (4)
        system("gpio -g mode 4 out");
	if($_POST['p2-ON']=='p2-ON')
            {
	    system("gpio -g write 4 1");
	    }
	if($_POST['p2-OFF']=='p2-OFF')
            {
	    system("gpio -g write 4 0");
	    }
        
	#gache (6)
	system("gpio -g mode 16 out");
	if($_POST['Open-gache']=='Open-gache')
            {
	    system("gpio -g write 16 1");
	    }
	if($_POST['Close-gache']=='Close-gache')
            {
	    system("gpio -g write 16 0");
	    }
	    
	
	#appoint (25)    
        system("gpio -g mode 25 out");
	if($_POST['Start-appoint']=='Start-appoint')
            {
	    system("gpio -g write 25 1");
	    }
	if($_POST['Stop-appoint']=='Stop-appoint')
            {
	    system("gpio -g write 25 0");
	    }
	header('Location: manu.php');
?>
