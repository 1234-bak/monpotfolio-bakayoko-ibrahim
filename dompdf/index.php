<?php
use Dompdf\Dompdf;// utilisation de la librairie Dompdf

use Dompdf\Options;// utilisation de la librairie Options

ob_start();//code aléatoire début
include('document.html');
$fichier = ob_get_contents();//récupération
ob_end_clean();//code aléatoire fin

include("autoload.inc.php");//mise en lien avec le fichier autoload.inc

$options = new Options();// instances des Options

$options->set('defaultFont','Courier');// défintion de la police

$dompdf = new Dompdf($options);// intanciation de Dompdf

$dompdf->loadHtml($fichier);// charger un document html

$dompdf->setPaper('A4','portrait');// format et oriention du document

$dompdf->render();// rendre le html en pdf

$dompdf->stream("myPdf.pdf");// générer le ficher pdf

?>