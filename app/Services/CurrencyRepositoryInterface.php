<?php

namespace App\Services;


use App\Currency;

interface CurrencyRepositoryInterface
{
    public function findById(int $id): ?Currency;

    public function store(Currency $currency) : Currency;

    public function delete(Currency $currency): void;

}