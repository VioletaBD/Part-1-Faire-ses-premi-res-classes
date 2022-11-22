<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$output = $bessie->say();
echo $output;

echo $bessie;

$toto = new Cow('Hello, Farm!');
$toto->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $toto;

?>