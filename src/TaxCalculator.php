<?php

namespace Vitab\NsTask;

class TaxCalculator
{
    public function calculateTax(int $salary, int $taxExemption, int $additionalIncome): int
    {

        $tax = 0;

        $totalIncome = $salary + $additionalIncome - $taxExemption;

        if ($totalIncome < 30000) {
            $tax = $totalIncome * 0.20;
        }
        if ($totalIncome >= 30000) {
            $tax = $totalIncome * 0.25;
        }

        return $tax;
    }
}
