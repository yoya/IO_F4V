<?php

if (is_readable('vendor/autoload.php')) {
    require 'vendor/autoload.php';
} else {
    require_once 'IO/F4V.php';
}

$options = getopt("f:hvtdR");

if ((isset($options['f']) === false) || (($options['f'] !== "-") && is_readable($options['f']) === false)) {
    fprintf(STDERR, "Usage: php f4vdump.php -f <f4v_file> [-htvd]\n");
    fprintf(STDERR, "ex) php f4vdump.php -f input.f4v -t \n");
    exit(1);
}

$filename = $options['f'];
if ($filename === "-") {
    $filename = "php://stdin";
}
$f4vdata = file_get_contents($filename);

$opts = array(
    'hexdump'  => isset($options['h']),
    'typeonly' => isset($options['t']),
    'verbose'  => isset($options['v']),
    'debug'    => isset($options['d']),
    'restrict' => isset($options['r'])
);

$f4v = new IO_F4V();
try {
    $f4v->parse($f4vdata, $opts);
} catch (Exception $e) {
    echo "ERROR: f4vdump: $filename:".PHP_EOL;
    echo $e->getMessage()." file:".$e->getFile()." line:".$e->getLine().PHP_EOL;
    echo $e->getTraceAsString().PHP_EOL;
    exit (1);
}

$f4v->dump($opts);
