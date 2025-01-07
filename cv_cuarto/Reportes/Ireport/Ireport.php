<?php
require_once '../phpjasperxml-master/vendor/autoload.php';


use simitsdk\phpjasperxml\PHPJasperXML;

$filename = "report1.jrxml";

$config = [
    'driver' => 'mysql',
    'host' => 'sql3.freemysqlhosting.net',
    'user' => 'sql3756113',
    'pass' => 'yHVCR3ibYr',
    'name' => 'sql3756113'
];

$report = new PHPJasperXML();
$report->load_xml_file($filename)
    ->setParameter(['reporttitle' => 'Database Report With Driver : ' . $config['driver']])
    ->setDataSource($config)
    ->export('Pdf');
print $report;