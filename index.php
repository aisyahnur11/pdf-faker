<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;
$faker = Faker\Factory::create();
$dompdf = new Dompdf();

$nama=$faker->name();
$alamat=$faker->text();

$dompdf->loadHtml("
<table border='1'>
    <tr>
    <td>nama</td>
    <td>alamat</td>
    </tr>

    <tr>
    <td>".$nama."</td>
    <td>".$alamat."</td>
    </tr>
</table>
");
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();