<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Http\Requests\CurrencyRequest;
use App\Services\CurrencyRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CurrencyController extends Controller
{
    private $currencyRepository;

   function __construct(CurrencyRepositoryInterface $repository)
    {
        $this->middleware('auth');//check if user authed
        $this->currencyRepository = $repository;
    }

    public function index()//index is allowed to all authed users
    {
        return view('currencies.currenciesList')->with('currencies',Currency::all());
    }


    public function create()
    {
        if(Gate::denies('currency.create')){
            return $this->redirectNotAuthed();
        }

        return view('currencies.currencyAdd');
    }


    public function store(CurrencyRequest $request)
    {
        if(Gate::denies('currency.create')){
            return $this->redirectNotAuthed();
        }

        $currency = new Currency();
        $currency->fill($request->validated());
        $this->currencyRepository->store($currency);

        return redirect(route('currencies.index'));
    }

    public function show(int $currencyId)//maybe some logic will appear here some day
    {
        $currency = $this->currencyRepository->findById($currencyId);

        if(Gate::denies('currency.view',$currency)){
            return $this->redirectNotAuthed();
        }
        if(is_null($currency)){
            abort(404);
        }

        return view('currencies.currencyRepresentation')->with('currency',$currency);
    }

    public function edit(int $currencyId)
    {
       $currency = $this->currencyRepository->findById($currencyId); //first authorize, then if model doesn't exists - abort

        if(Gate::denies('currency.update',$currency)){
            return $this->redirectNotAuthed();
        }
        if(is_null($currency)) {
            abort(404);
        }

        return view('currencies.currencyEdit')->with('currency',$currency);
    }


    public function update(CurrencyRequest $request, int $currencyId)
    {
        $currency = $this->currencyRepository->findById($currencyId);
        if(Gate::denies('currency.update',$currency)){
            return $this->redirectNotAuthed();
        }
        if(is_null($currency)) {
            abort(404);
        }

        $currency->fill($request->validated());
        $this->currencyRepository->store($currency);
        return redirect(route('currencies.show',$currency->id));
    }

    public function destroy(int $currencyId)
    {
        $currency = $this->currencyRepository->findById($currencyId);

        if(Gate::denies('currency.delete',$currency)){
            return $this->redirectNotAuthed();
        }
        if(is_null($currency)) {
            abort(404);
        }


        $this->currencyRepository->delete($currency);
        return redirect(route('currencies.index'));
    }

    private function redirectNotAuthed()
    {
        return redirect('/');//User is authed already, so we just redirect him to default page
    }

}
