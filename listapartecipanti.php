<?php
//	$con = mysql_connect("127.0.0.1","utentedb","");
require_once('DB/Connections/conn.php') ;
	mysql_select_db("test", $conn);
	
	//Getting records (listAction)

		//Get records from database DATE_FORMAT(data_ora,'%d/%m/%Y %H:%i:%s') as data
		// "SELECT *, DATE_FORMAT(data,'%d-%m-%Y') as Data FROM partecipanti WHERE evento = " .$_GET['idev']
		//("SELECT ingressi.id , stato, nome , idpartecipante , DATE_FORMAT(data_ora,'%d/%m/%Y %H:%i:%s') as data  FROM ingressi INNER JOIN partecipanti
		//ON ingressi.idpartecipante = partecipanti.id  ORDER BY data DESC;");
		$result = mysql_query("SELECT *, DATE_FORMAT(data,'%d-%m-%Y') as Data FROM partecipanti WHERE evento = " . $_GET['idev'] );
		
		//Add all records to an array
		$rows = array();
		
		while($row = mysql_fetch_array($result))
		{
		   $rows[] ='{"DisplayText":"'.$row['nome'] .'","Value":"'.$row['id'].'"}';
		   //$row;
		}
		$stringa = implode(',',  $rows);
		echo'{"Result":"OK","Options":[';
		echo $stringa;
        echo ']}';
  ?>
