<?php

use Vitab\NsTask\InputHandler;
use Vitab\NsTask\MainClass;

require_once './vendor/autoload.php';

do {
    $input = new InputHandler();
    var_dump($input->input());
    $command = readline('Choose command: ');
    if ($command == 1 || $command == 2 || $command == 3 ) {
        $value = readline('Input value: ');
    }

    $main = new MainClass($command, isset($value));
    $main->main();
} while (
    $command != 5
);


