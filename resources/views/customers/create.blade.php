@extends('layouts.app')

@section('title' , 'Add New Customer')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Customer</h1>
        </div>
    </div>

    <form action="/customers" method="POST">

        @include('customers.form')

        <button type="submit" class="btn btn-primary">Add Customer</button>

    </form>



@endsection