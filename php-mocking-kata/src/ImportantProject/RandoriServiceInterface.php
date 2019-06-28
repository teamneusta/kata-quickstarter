<?php
declare(strict_types=1);

namespace RealLife\ImportantProject;

/**
 * Class RandoriServiceInterface
 *
 * @package RealLife\ImportantProject
 */
interface RandoriServiceInterface
{
    /**
     * A method that gets a string numbers and returns a string roman.
     *
     * The given numbers are added using \RealLife\Calculations\StringCalculatorInterface::add().
     *
     * The sum is then converted to roman with \RealLife\Calculations\ArabicConverterInterface::toRoman().
     *
     * @param string $numbers
     *
     * @return string
     */
    public function transform(string $numbers): string;
}
