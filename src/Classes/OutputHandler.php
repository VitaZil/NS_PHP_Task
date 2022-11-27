<?php

namespace Vitab\NsTask\Classes;

class OutputHandler
{
    public function output(): void
    {
        $main = new MainClass();
        $data = $main->getData();

        $taxCalculator = new TaxCalculator();
        $tax = $taxCalculator->calculateTax($data['salary'], $data['tax_exemption'], $data['income']);

        echo 'Your taxes: ' . $tax . PHP_EOL;
    }
}
