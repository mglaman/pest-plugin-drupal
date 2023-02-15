<?php

declare(strict_types=1);

namespace Pest\Drupal;

use Pest\Plugin;
use PHPUnit\Framework\TestCase;

Plugin::uses(Example::class);

/**
 * @return TestCase
 */
function example(string $argument)
{
    return test()->example(...func_get_args()); // @phpstan-ignore-line
}
