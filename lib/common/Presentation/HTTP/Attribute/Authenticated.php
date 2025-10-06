<?php

declare(strict_types=1);

namespace Common\Presentation\HTTP\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final readonly class Authenticated
{
}
