@extends('layouts.layout')

@section('title')
    {{$currency->title}}
@endsection

@section('content')
    {{-- Title and edit buttons --}}
    <div class="row">
        <div class="col-sm-12 col-md-6 text-sm-center text-md-left">
            <h2 class="currency-representation-header"> {{$currency->title}} </h2>
            <span class="text-secondary"> ({{$currency->short_name}})</span>
        </div>
        <div class = "col-sm-12 col-md-6 text-md-right text-sm-center">
            <button role = "button" class="btn btn-primary" title="edit">
                <i class="fas fa-edit"></i>
            </button>
            <button id="delete" role = "button" class="btn btn-danger" title="delete" data-toggle="modal" data-target = "#delete-modal">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </div>
    <hr>
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

    <!-- Modal -->
    <div id = "delete-modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This currency will be deleted permanently.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="submit" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <form id="delete-form" action="{{route('currencies.destroy',$currency->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
@endsection

@section('scripts')
    @parent
    <script>
        $('#submit').click(function(){
            $('#delete-form').submit();
        });
    </script>
@endsection