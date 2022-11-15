<?php

use Vitab\NsTask\InputHandler;
use Vitab\NsTask\MainClass;

require_once './vendor/autoload.php';

$main = new MainClass($argv);
$main->main();

$input = new InputHandler();
var_dump($input->input());
$input->validate($argv);

do {

} while (
    $argv[1] != 5
);
