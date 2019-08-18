<?php
declare(strict_types=1);

namespace RealLife\Calculations;

/**
 * Interface for string calculations.
 */
interface StringCalculatorInterface
{
    /**
     * This is from the famous String Calculator Kata ({@link http://codingdojo.org/kata/StringCalculator}):
     * 
     * - The method can take 0, 1 or 2 numbers separated by comma, and returns their sum.
     * - An empty string will return “0”.
     * - Example of inputs: "", "1", "1.1,2.2".
     */
    public function add(string $numbers): int;
}
