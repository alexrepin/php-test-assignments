FROM composer:2.8.8 as composer
FROM php:8.3.19-cli-alpine

ARG DEBIAN_FRONTEND=noninteractive

ENV ENV_SUBSTITUTION_ENABLE=true
ENV TZ=UTC

WORKDIR /app

COPY --from=composer /usr/bin/composer /usr/local/bin/composer
