<?php


// cartella da copiare
$s = 'ftp://7119953@aruba.it:k3c731vd75@ftp.ecmconference.it/www.ecmconference.it/DB/sfondi';

// destinazione
$c = 'c:\xampp\htdocs\www.ecmconference.it\DB\sfondi';

// copia ricorsiva di tutto il contenuto della cartella sorgente
copia_tutto($s,$c);

function copia_tutto($src,$dest) {
  foreach (scandir($src) as $file) {
    if (!is_readable($src.'/'.$file)) continue;
    if (is_dir($file) && ($file!='.') && ($file!='..') ) {
      mkdir($dest . '/' . $file);
      copia_tutto($src.'/'.$file, $dest.'/'.$file);
    }  else 
		echo $src.'/'.$file .'...  '. $dest.'/'.$file;
		copy($src.'/'.$file, $dest.'/'.$file);
  }
}

?>