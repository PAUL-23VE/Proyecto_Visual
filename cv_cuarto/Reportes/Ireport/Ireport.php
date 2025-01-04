<?php
require_once '../phpjasperxml-master/vendor/autoload.php';


use simitsdk\phpjasperxml\PHPJasperXML;

$filename = "report1.jrxml";

$config = [
    'driver' => 'mysql',
    'host' => 'localhost:3387',
    'user' => 'root',
    'pass' => '',
    'name' => 'cuarto'
];

$report = new PHPJasperXML();
$report->load_xml_file($filename)
    ->setParameter(['reporttitle' => 'Database Report With Driver : ' . $config['driver']])
    ->setDataSource($config)
    ->export('Pdf');
print $report;