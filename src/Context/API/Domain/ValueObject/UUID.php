<?php

declare(strict_types=1);

namespace App\Context\API\Domain\ValueObject;

use JsonSerializable;
use Random\RandomException;

final readonly class UUID implements JsonSerializable
{
    private string $value;

    /**
     * @throws RandomException
     */
    public function __construct(
        string $uuid = null,
    ) {
        $this->value = $uuid ?? random_bytes(16);
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
