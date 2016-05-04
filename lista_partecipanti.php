<?php require_once('Connections/conn.php'); 

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
// QUERY ALL PARTECIPANTI
mysql_select_db($database_conn, $conn);

	
$query_rs_lista = "SELECT *, DATE_FORMAT(data,'%d-%m-%Y') as Data FROM partecipanti";

$rs_lista = mysql_query($query_rs_lista, $conn) or die(mysql_error());
$row_rs_lista = mysql_fetch_assoc($rs_lista);
$totalRows_rs_lista = mysql_num_rows($rs_lista);
// QUERY ALL EVENTI
$query_rs_eventi = "SELECT * FROM eventi";

$rs_eventi = mysql_query($query_rs_eventi, $conn) or die(mysql_error());
$row_rs_eventi = mysql_fetch_assoc($rs_eventi);
$totalRows_rs_eventi = mysql_num_rows($rs_eventi);


?>
