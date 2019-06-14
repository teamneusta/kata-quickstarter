<?php
/** @noinspection PhpUnusedPrivateFieldInspection */
declare(strict_types=1);

namespace RealLife\ImportantProject\Models;

use MyCLabs\Enum\Enum;

/**
 * Class Sign
 *
 * @package RealLife\ImportantProject\Models
 */
final class Sign extends Enum
{
    private const NONE      = 'none';
    private const ADD       = 'add';
    private const SUBSTRACT = 'substract';
    private const MULTIPLY  = 'multiply';
    private const DIVIDE    = 'divida';
}
