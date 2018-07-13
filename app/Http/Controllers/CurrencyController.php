<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Http\Requests\CurrencyRequest;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Currency::class);
    }

    public function index()
    {
        return view('currencies.currenciesList')->with('currencies',Currency::all());
    }


    public function create()
    {
        return view('currencies.currencyAdd');
    }


    public function store(CurrencyRequest $request)
    {
        Currency::create($request->validated());
        return redirect(route('currencies.index'));
    }

    public function show(Currency $currency)
    {
        return view('currencies.currencyRepresentation')->with('currency',$currency);
    }

    public function edit(Currency $currency)
    {
        return view('currencies.currencyEdit')->with('currency',$currency);
    }


    public function update(CurrencyRequest $request, Currency $currency)
    {
        $currency->update($request->validated());
        return redirect(route('currencies.show',$currency->id));
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect(route('currencies.index'));
    }
}
