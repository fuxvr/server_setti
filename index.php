<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/fonts/ptsans/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/fluid.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/icons/icons.css" media="screen" />

<title>Ordini Login</title>

</head>

<body>
<div id="mws-logo"> <img src="images/logo.jpg" alt="" width="200" height="100" /> </div>
            
<div id="mws-login">
   	  <h1>Login</h1>
        <div class="mws-login-lock"><img src="css/icons/24/locked-2.png" alt="" /></div>
    	<div id="mws-login-form">
        	<form class="mws-form" action="DB/checklogin.php" method="post" nome="login">
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input name="myusername" type="text" class="mws-login-username mws-textinput"  />
                    </div>
                </div>
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input name="mypassword" type="password" class="mws-login-password mws-textinput" />
                        <input name="nbv" type="checkbox" id="conf1" onclick="conf()" /> <spam style="color: #FFFFFF;"> Ho Letto e acceto le condizioni sulla Privacy</spam>
                    </div>
                </div>

                <div class="mws-form-row">
                	<input type="submit" value="Login" id="login" disabled="true" class="mws-button green mws-login-button" />
                </div>
            </form>
        </div>
    </div>
    <div id="mws-privacy"><p><h1>Privacy</h1>
    Informativa ex art. 13 D.Lgs 196/03<br />

BENITO SETTI AUDIOVISIVI s.r.l, in persona del legale rappresentante pro tempore, con sede legale in via dell`Agricoltura, 37 - 37012 - Bussolengo (Vr) -, ai sensi dell'art. 13 del Codice in materia di protezione dei dati personali, D.Lgs. 30.06.2003 n.196 (di seguito "Codice"), quale Titolare del trattamento, informa che la compilazione del form pubblicato sulla presente pagina web comporterà l'acquisizione ed il trattamento, da parte della società, dei dati personali degli utenti.
Finalità del trattamento.
a) I dati personali forniti dagli utenti sono utilizzati al solo fine di dare risposta alla richiesta formulata nel form.
Il trattamento dei dati avverrà da parte di incaricati e di responsabili che utilizzeranno strumenti informatici idonei a garantirne la riservatezza e la sicurezza. La conservazione dei dati viene effettuata nel rispetto delle disposizioni del Codice. I dati non saranno nè comunicati a terzi né diffusi.
    </p></div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
<!--
function conf() {
document.getElementById('login').disabled = true;
if (document.getElementById('conf1').checked ) {
document.getElementById('login').disabled = false;
}
}
//-->
</script>

</head>
<body>
