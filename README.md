# PHP: Тестовое задание

Тестовое задание по реализации сервиса хранения и обмена курсами криптовалют. Цель тестового задания — продемонстрировать навыки проектирования и структурирования кода.

---
### Требования к реализации:
- Используйте чистый PHP, без внеших библиотек
- * Проектируйте абстрактно, но не упуская деталей
- * Не пропускайте реализации инфраструктурного уровня (абстракное описание моделей, запросов и т.п.)
- Тесты — как задача со звездочкой
- **Код не нужно будет запускать**, ошибки и неточности допускаются

Сроки реализации: **1 час**.

---
### Функциональные требования:
#### 1. Сбор и хранение истории курсов с биржи
- Сервис в фоном режиме должен раз в **N** времени забирать с **X** биржи курсы валют по отношению к курсу **USD** (предположим, что на бирже все валюты имеют отношение к **USD**)
- Сервис должен сохранять историю прошлых значений курсов

Структура ответа биржи:
```json
[
  {
    "codes": "USDTUSD",
    "scale": 4,
    "price": "1.09"
  },
  {
    "codes": "BTCUSD",
    "scale": 6,
    "price": "59435.00"
  },
  {
    "codes": "ETHUSD",
    "scale": 8,
    "price": "2521.66"
  }
]
```
> **Важно:** у каждой валюты есть свой `scale`, точность, число символов после запятой.
---
#### 2. Обмен валют
- Сервис должен иметь API позволяющий обменять сумму **X** в валюте **Y** в валюту **Z** (к к примеру `10` `USD` в `EUR`)
- Сервис должен выдать ошибку если при запросе обмена валют информацию об актуальности курсов устарела на **N** времени

> **Важно:** пользователь может запросить обмен валюты к которой нет прямого курса, к примеру `BTC` в `EUR`, соответственно курс нужно просчитать через `USD` к которому у нас есть значения.
> 
> Для работы с числами необходимо использовать библиотеку **BCMath**.

#### 3. Получение всех курсов
- Сервис должен иметь API позволяющий получить список всех актуальных курсов в системе
- Сервис должен иметь API позволяющий получить список курсов за конкретную дату
---
### Нефункциональные требования:
**Опциональны:**
- Версионирование API
- Логирование
- Возможность смены биржи
- Конфигурация
