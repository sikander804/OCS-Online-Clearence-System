<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once("vendor/dompdf/dompdf/src/Autoloader.php");
require_once 'vendor/dompdf/dompdf/lib/html5lib/Parser.php';
require_once 'vendor/phenx/php-font-lib/src/FontLib/Autoloader.php';
require_once 'vendor/phenx/php-svg-lib/src/autoload.php';
require_once 'vendor/dompdf/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

class Pdfgenerator {

  public function generate($html, $filename='', $stream=TRUE, $paper = 'A4', $orientation = "portrait")
  {
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => 0));
    } else {
        return $dompdf->output();
    }
  }
}

?>