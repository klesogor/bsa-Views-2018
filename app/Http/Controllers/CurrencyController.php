<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{

    public function index()
    {
        return view('currencies.currenciesList')->with('currencies',Currency::all());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Currency $currency)
    {
        return view('currencies.currencyRepresentation')->with('currency',$currency);
    }

    public function edit(Currency $request)
    {
        //
    }


    public function update(Request $request, Currency $currency)
    {
        //
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect(route('currencies.index'));
    }
}
