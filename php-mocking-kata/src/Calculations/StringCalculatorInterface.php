<?php
declare(strict_types=1);

namespace RealLife\Calculations;

/**
 * Interface for string calculations.
 */
interface StringCalculatorInterface
{
    public function add(string $numbers): int;
}
