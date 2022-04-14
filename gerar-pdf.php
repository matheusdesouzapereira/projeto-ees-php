<?php

    require_once 'dompdf/autoload.inc.php';

    // referenciando o namespace do dompdf

    use Dompdf\Dompdf;

    $dompdf = new Dompdf(["enable_remote" => true]);

    ob_start();
    require __DIR__ . "/exibe-pdf.php";
    $dompdf->loadhtml(ob_get_clean());

    $dompdf->setPaper("A4", "portrait");

    $dompdf->render();
    $dompdf->stream("file.pdf", ["Attachment" => false]);

?>