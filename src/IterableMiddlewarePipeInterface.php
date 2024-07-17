<?php

declare(strict_types=1);

namespace Laminas\Stratigility;

use IteratorAggregate;
use Psr\Http\Server\MiddlewareInterface;

/** @extends IteratorAggregate<int, MiddlewareInterface> */
interface IterableMiddlewarePipeInterface extends MiddlewarePipeInterface, IteratorAggregate
{
}
