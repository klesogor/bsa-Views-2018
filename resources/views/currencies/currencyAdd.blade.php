@extends('layouts.layout')

@section('title')
    Add new currency
@endsection

@section('content')
    <h2 class="currency-header"> Add new currency </h2>
    <hr>
    @currencyAddForm()
    @endcurrencyAddForm
@endsection

@section('scripts')
    @parent
@endsection