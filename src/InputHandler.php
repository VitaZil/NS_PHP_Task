<?php

namespace Vitab\NsTask;

class InputHandler
{
    public function input(): string
    {
        $commands = '○ 1- Input your yearly income (salary based)
        ○ 2- Input the amount of tax exemption (if any)
        ○ 3- Input your additional income
        ○ 4- Calculate Tax
        ○ 5- Quit' . PHP_EOL;

        return $commands;
    }
}

