<?php
declare(strict_types=1);

namespace RealLife\ImportantProject;

use RealLife\ImportantProject\Models\Operation;

/**
 * Class OperationsLogInterface
 */
interface OperationsLogInterface
{
    public function addOperation(Operation $operation): void;
}
