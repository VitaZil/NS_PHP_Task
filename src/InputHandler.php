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

    public function validateValue($value): bool
    {
        $trimValue = (int) trim($value);

        return preg_match('/^\d{1,9}$/', $trimValue);
    }
}

