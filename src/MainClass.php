<?php

namespace Vitab\NsTask;

class MainClass
{
    public function __construct(protected array $argv)
    {
        $this->command = $this->argv[1];
        $this->salary = $argv[2];
        $this->taxExemption = $argv[2];
        $this->additionalIncome = $argv[2];
    }

    public function main(): void
    {
        match ($this->command) {
            '1' => $this->salary,
            '2' => $this->taxExemption,
            '3' => $this->additionalIncome,
            '4' => (new TaxCalculator())->calculateTax($this->salary, $this->taxExemption, $this->additionalIncome),
            '5' => 'Quit',
        };
    }
}
