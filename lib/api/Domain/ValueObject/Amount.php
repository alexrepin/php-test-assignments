<?php

declare(strict_types=1);

namespace API\Domain\ValueObject;

use JsonSerializable;
use Stringable;

final readonly class Amount implements JsonSerializable, Stringable
{
    private string $value;

    public function __construct(
        string $amount,
    ) {
        $this->value = $amount;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
