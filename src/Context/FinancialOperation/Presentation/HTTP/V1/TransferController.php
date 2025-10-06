<?php

declare(strict_types=1);

namespace App\Context\FinancialOperation\Presentation\HTTP\V1;

use API\Domain\ValueObject\UUID;
use Common\Presentation\HTTP\Attribute\Authenticated;
use Common\Presentation\HTTP\Response;

/**
 * Точка входа в микро-сервис
 */
#[Authenticated]
final readonly class TransferController
{
    /**
     * Мы МОЖЕМ гарантировать, что пользователь авторизован (поле `customer`)
     * Мы МОЖЕМ гаранитровать, что поля объекта `TransferRequest` валидны по указаным типам
     *
     * Мы НЕ МОЖЕМ гарантировать, что пользователь ввел КОРРЕКТНЫЕ данные
     */
    public function __invoke(TransferRequest $request, UUID $customer): Response
    {
        // Напишите логику приложения
    }
}
