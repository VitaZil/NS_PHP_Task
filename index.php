<?php

use Vitab\NsTask\InputHandler;
use Vitab\NsTask\MainClass;
use Vitab\NsTask\OutputHandler;

require_once './vendor/autoload.php';

do {
    $input = new InputHandler();
    var_dump($input->input());

    $command = readline('Choose command: ');

    $value = '';

    if ($command == 1 || $command == 2 || $command == 3) {
        $value = readline('Input value: ');
    }
    $main = new MainClass($command, $value);
    $main->main();
    if ($command == 4) {
        echo 'Your taxes: ' . (new OutputHandler())->output() . PHP_EOL;
    }
} while (
    $command != 5
);


