@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    @if(! session()->has('message'))

        <h1>Contact Us</h1>
        <form action="{{ route('contact.store') }}" method="post">

            <label for="name">Name</label>
            <div class="form-group pb-2">
                <input type="text" name="name" value="{{ old('name')}}" class="form-control">
            </div>

            <div>{{$errors->first('name')}}</div>

            <label for="email">E-Mail</label>
            <div class="form-group pb-2">
                <input type="text" name="email" value="{{ old('email')}}" class="form-control">
            </div>

            <div>{{$errors->first('email')}}</div>

            <label for="message">Message</label>
            <div class="form-group pb-2">
                <textarea name="message" id="message" cols="20" rows="10" class="form-control">{{ old('message') }}</textarea>
            </div>
            <div>{{$errors->first('message')}}</div>

            @csrf

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

    @endif

    @endsection