<?php
 session_start();
if (!isset($_SESSION['myusername'])){
header("location:index.php");
}

include("DB/lista_ingressi.php"); 
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-1" /> 
<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/fonts/ptsans/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/fluid.css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/icons/icons.css" media="screen" />

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="plugins/colorpicker/colorpicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/jimgareaselect/css/imgareaselect-default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/fullcalendar/fullcalendar.print.css" media="print" />
<link rel="stylesheet" type="text/css" href="plugins/tipsy/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/jgrowl/jquery.jgrowl.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/spinner/spinner.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jui/jquery.ui.css" media="screen" />

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/mws.theme.css" media="screen" />
<!-- Theme tabella -->
    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
<!-- JavaScript Plugins -->

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="plugins/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="plugins/jgrowl/jquery.jgrowl.js"></script>
<script type="text/javascript" src="plugins/jquery.filestyle.js"></script>
<script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="plugins/jquery.dataTables.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.stack.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="plugins/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="plugins/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="plugins/sourcerer/Sourcerer-1.2.js"></script>
<script type="text/javascript" src="plugins/jquery.placeholder.js"></script>
<script type="text/javascript" src="plugins/jquery.validate.js"></script>
<script type="text/javascript" src="plugins/jquery.mousewheel.js"></script>
<script type="text/javascript" src="plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript" src="js/mws.js"></script>
<script type="text/javascript" src="js/demo.js"></script>
<script type="text/javascript" src="js/themer.js"></script>
	
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="js/jtable/jquery.jtable.js" type="text/javascript"></script>
<title>Inserimento utenti</title>
</head>
<body>
  <?php include("condivisi/intestazione.php"); ?>
      <div id="mws-wrapper">
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
		 
<?php 
		include("condivisi/menu_controllo.php");
		
		if (isset($_GET['idev'])){	?>
        <div id="mws-container" class="clearfix">
        <div class="mws-panel grid_3">
                	<form enctype="multipart/form-data" method="post" action="DB/importa_csv.php"> 
        				  <input type="submit" value="Importa dati dal WEB" class="mws-button green large  mws-i-24 i-cog large" />
      				</form>       
		</div>
        
 <Br /><Br /><Br />
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-table-1">Ingressi<a>Esporta in EXCEL</a></span>
                        
                    </div>
                    <div class="mws-panel-body">
	
	<div id="PeopleTableContainer" style="width: 100%;"></div>

	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
			
				actions: {
					listAction: 'DB/PersonActions.php?action=list&idev=<?=$_GET['idev']?>',
					createAction: 'DB/PersonActions.php?action=create&idev=<?=$_GET['idev']?>',
					updateAction: 'DB/PersonActions.php?action=update&idev=<?=$_GET['idev']?>',
					deleteAction: 'DB/PersonActions.php?action=delete&idev=<?=$_GET['idev']?>'
				},
				
				fields: {
					id: {
						title: 'id',
						key: true,
						create: false,
						edit: false,
						
					},
					
					idpartecipante: {
						title: 'Partecipante',
						width: '20%',
						options: 'listapartecipanti.php?idev=<?=$_GET['idev']?>',
					},
					stato: {
						title: 'Stato',
						width: '20%',
						input: function (stato) {
       						return '<select name="stato"><option value="ENTRATA">ENTRATA</option><option value="USCITA">USCITA</option></select>';
       					 }
					},
					data: {
						title: 'Record date',
						width: '20%'
						
						
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>

     </div>

 
 <?php	 } ?>




  </body>
</html>
