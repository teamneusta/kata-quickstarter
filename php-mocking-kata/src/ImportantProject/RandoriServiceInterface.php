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
    public function transform(string $numbers): string;
}
