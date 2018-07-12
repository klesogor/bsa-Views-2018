@extends('layouts.layout')

@section('title')
    Edit currency
@endsection

@section('content')
    <h2 class="currency-header"> Edit {{$currency->title}} </h2>
    <hr>
    @currencyEditForm(['currency'=>$currency])
    @endcurrencyEditForm
@endsection

@section('scripts')
    @parent
@endsection