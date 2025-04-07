<?php

declare(strict_types=1);

namespace App\Context\API\Domain\ValueObject;

use JsonSerializable;

final readonly class Amount implements JsonSerializable
{
    private string $value;

    public function __construct(
        string $balance,
    ) {
        $this->value = $balance;
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
