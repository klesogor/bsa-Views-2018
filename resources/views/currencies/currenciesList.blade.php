@extends('layouts.layout')

@section('title')
    All currencies
@endsection

@section('content')
    @if($currencies->isEmpty())
        <div class = "currency-header alert alert-warning" role = "alert">
            No currencies.
        </div>
    @else
        <div class = "currency-header text-center">
            <h2>All currencies list</h2>
        </div>
        <table class = "table">
            <caption>List of currencies</caption>
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                    <th scope="col">Symbol</th>
                    <th scope="col">Price</th>
                    <th scope = "col"></th>
                    <th scope = "col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($currencies as $index=>$currency)
                    @currencyRow(['index'=>$index+1,'currency'=>$currency])
                    @endcurrencyRow
                @endforeach
            </tbody>
        </table>
        <form id="delete-form"  method="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
        </form>
    @endif
@endsection

@include('components.modal')


@section('scripts')
    @parent

    <script>
        $('#submit').click(function(){
            $('#delete-form').submit();
        });

        $('.delete-button').click(function(){
            let route = $(this).attr('route');
            $('#delete-form').attr('action',route);
        });
    </script>
@endsection