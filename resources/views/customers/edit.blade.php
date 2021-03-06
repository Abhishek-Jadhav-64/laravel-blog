@extends('layouts.app')

@section('title' , 'Edit Details of' . $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{ $customer->name }}</h1>
        </div>
    </div>

    <form action="{{ route('customers.update', ['customer'  => $customer]) }}" method="POST">

        @method('PATCH')
        @include('customers.form')
        <button type="submit" class="btn btn-primary">Save Customer</button>

    </form>

@endsection