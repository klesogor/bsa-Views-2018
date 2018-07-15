<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Http\Requests\CurrencyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CurrencyController extends Controller
{

   function __construct()
    {
        $this->middleware('auth');//check if user authed
    }

    public function index()//index is allowed to all authed users
    {
        return view('currencies.currenciesList')->with('currencies',Currency::all());
    }


    public function create()
    {
        if(Gate::denies('currency.create',Currency::class)){
            return $this->redirectNotAuthed();
        }

        return view('currencies.currencyAdd');
    }


    public function store(CurrencyRequest $request)
    {
        if(Gate::denies('currency.create',Currency::class)){
            return $this->redirectNotAuthed();
        }

        Currency::create($request->validated());
        return redirect(route('currencies.index'));
    }

    public function show(Currency $currency)//maybe some logic will appear here some day
    {
        if(Gate::denies('currency.view',$currency)){
            return $this->redirectNotAuthed();
        }

        return view('currencies.currencyRepresentation')->with('currency',$currency);
    }

    public function edit(Currency $currency)
    {
        if(Gate::denies('currency.update',$currency)){
            return $this->redirectNotAuthed();
        }

        return view('currencies.currencyEdit')->with('currency',$currency);
    }


    public function update(CurrencyRequest $request, Currency $currency)
    {
        if(Gate::denies('currency.update',$currency)){
            return $this->redirectNotAuthed();
        }

        $currency->update($request->validated());
        return redirect(route('currencies.show',$currency->id));
    }

    public function destroy(Currency $currency)
    {
        if(Gate::denies('currency.delete',$currency)){
            return $this->redirectNotAuthed();
        }

        $currency->delete();
        return redirect(route('currencies.index'));
    }

    private function redirectNotAuthed()
    {
        return redirect('/');//User is authed already, so we just redirect him to default page
    }
}
