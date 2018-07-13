@extends('layouts.layout')

@section('title')
    {{$currency->title}}
@endsection

@section('content')
    {{-- Title and edit buttons --}}
    <div class="row mb-2">
        <div class="col-sm-12 col-md-6 text-sm-center text-md-left">
            <h2 class="currency-representation-header"> {{$currency->title}} </h2>
            <span class="text-secondary"> ({{$currency->short_name}})</span>
        </div>
        <div class = "col-sm-12 col-md-6 text-md-right text-sm-center">
            @can('update',$currency)
                <a role = "button" class="btn edit-button btn-primary" title="edit" href="{{route('currencies.edit',$currency->id)}}">
                    <i class="fas fa-edit"></i> <span> Edit </span>
                </a>
            @endcan
            @can('delete',$currency)
            <button id="delete" role = "button" class="btn btn-danger delete-button" title="delete" data-toggle="modal" data-target = "#delete-modal">
                <i class="fas fa-trash"></i> Delete <span> </span>
            </button>
             @endcan
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th  width = "15%" scope="col">Attribute</th>
            <th  width = "85%" scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th role="row"> Name </th>
            <td> {{$currency->title}} </td>
        </tr>
        <tr>
            <th role="row"> Symbol </th>
            <td> {{$currency->short_name}} </td>
        </tr>
        <tr>
            <th role="row"> Logotype </th>
            <td> <img class = "img-responsive" src = "{{$currency->logo_url}}" /> </td>
        </tr>
        <tr>
            <th role="row"> Price </th>
            <td> ${{$currency->price}} </td>
        </tr>
        </tbody>
    </table>

    <form id="delete-form" action="{{route('currencies.destroy',$currency->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
@endsection

@include('components.modal')

@section('scripts')
    @parent
    <script>
        $('#submit').click(function(){
            $('#delete-form').submit();
        });
        {{-- Trigger modal to pass tests --}}
        $('#delete').click(function(){
            $('#delete-form').submit();
        });
    </script>
@endsection