<?php
declare(strict_types=1);

namespace RealLife\Calculations;

/**
 * Interface for arabic number conversions.
 */
interface ArabicConverterInterface
{
    /// <summary>
    /// Converts the given arabic <paramref name="number"/> to its roman representation.
    /// </summary>
    /// <exception cref="ArgumentException">Is thrown when <paramref name="number"/> is less than 1 or greater than 3.888.</exception>
    /// <remarks>
    /// 1       I
    /// 5       V
    /// 10      X
    /// 50      L
    /// 100     C
    /// 500     D
    /// 1000    M
    ///
    /// Convert numbers from 1 to 3888.
    ///
    /// Only I, X, C and M can occur multiple times in a row (up to 3 times).
    /// And only one I, X or C can be subtracted (e.g. IV = 4, IX = 9, CD = 400).
    /// Note: Only the next small number can be subtracted, so IC is not valid.
    ///
    /// 99 = XCIX (90+9)
    /// </remarks>
    public function toRoman(int $number): string;
}
