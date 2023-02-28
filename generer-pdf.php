<?php
use Dompdf\Dompdf;

ob_start();

include('monCV.php');
$fichier = ob_get_contents();

ob_end_clean();

include('dompdf/autoload.inc.php');

$dompdf = new Dompdf();
$dompdf->loadHtml($fichier);

$dompdf->setPaper('A4','portrait');

$dompdf->render();
$dompdf->stream('CV BAKAYOKO IBRAHIM');