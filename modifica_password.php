<?php
 session_start();
if (!isset($_SESSION['myusername'])){
header("location:index.php");
} ?>

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

 
<title>Ordini CANEVAWORLD RESORT</title>

</head>

<body>

	<?php include("condivisi/intestazione.php"); ?>

    <div id="mws-wrapper">
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
		
        
        <div id="mws-container" class="clearfix">
            

            	<div class="mws-panel grid_4">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-list">Modifica Ordini</span>
                    </div>
                    <div class="mws-panel-body">
                    	<form class="mws-form" action="DB/update_pass.php" method="post">
                    		    <div class="mws-form-inline">

                    			<div class="mws-form-row">
                    				<label>Vecchia Password :</label>
                    				<div class="mws-form-item large">
                    					<input name="v_pass" type="text" class="mws-textinput"  />
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label>Nuova Password :</label>
                    				<div class="mws-form-item large">
                    					<input name="n_pass" type="text" class="mws-textinput" />
                    				</div>
                    			</div>
								<div class="mws-form-row">
                    				<label>Conferma Password </label>
                    				<div class="mws-form-item small">
                    					<input name="cn_pass" type="text" class="mws-textinput" />
                    				</div>
                    			</div>


                    		</div>
            				<div class="mws-button-row">
                    			<input type="submit" value="Salva Modifiche" class="mws-button green" />
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>
                           
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
    </div>

</body>
</html>
