<?php


namespace App\Services;


interface ProvidersFactoryInterface
{
    public function getDriver(string $provider);
}