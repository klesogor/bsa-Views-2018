<?php

namespace App\Services;


use App\Currency;

class CurrencyRepository implements  CurrencyRepositoryInterface
{

    public function findById(int $id): ?Currency
    {
        return Currency::find($id);
    }

    public function store(Currency $currency): Currency
    {
        $currency->save();
        return $currency;
    }

    public function delete(Currency $currency): void
    {
        $currency->delete();
    }
}