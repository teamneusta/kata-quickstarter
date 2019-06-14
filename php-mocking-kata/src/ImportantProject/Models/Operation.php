<?php
declare(strict_types=1);

namespace RealLife\ImportantProject\Models;

/**
 * Class Operation
 */
interface Operation
{
    /**
     * @return array|int[]
     */
    public function getOperands(): array;

    public function setOperands(int ...$operands): void;

    public function getSign(): Sign;

    public function setSign(Sign $sign): void;

    public function getResult(): int;

    public function setResult(int $result): void;
}
