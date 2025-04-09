<?php

declare(strict_types=1);

namespace Common\Presentation\HTTP;

use JsonSerializable;

final readonly class Response implements JsonSerializable
{
    /**
     * @param array<string, mixed> $response
     */
    public function __construct(
        private array $response,
    ) {
    }

    /**
     * @return array{
     *     data: array<array-key, mixed>,
     * }
     */
    public function jsonSerialize(): array
    {
        return [
            'data' => $this->response,
        ];
    }
}
