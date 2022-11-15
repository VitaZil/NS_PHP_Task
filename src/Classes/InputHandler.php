<?php

namespace Vitab\NsTask\Classes;

class InputHandler
{
    public function input(): void
    {
        $allCommands = '○ 1- Input your yearly income (salary based)' . PHP_EOL
        . '○ 2- Input the amount of tax exemption (if any)' . PHP_EOL
        . '○ 3- Input your additional income' . PHP_EOL
        . '○ 4- Calculate Tax' . PHP_EOL
        . '○ 5- Quit' . PHP_EOL;

        echo $allCommands;
    }

    public function validateValue($value): bool
    {
        $trimValue = (int) trim($value);

        return preg_match('/^\d{1,9}$/', $trimValue);
    }
}
