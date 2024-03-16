<!-- a user enters their information to subscribe to the blog -->

@extends('layouts.main')
@section('content')
<div class="container">

    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
    @endforeach
    @endif

    <h1 class="p-5">Register</h1>
    <form id="subForm" class="text-center p-5" action="{{route('store') }}" method="POST">

        {{csrf_field()}}

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="firstName" class="form-control" name="firstName" placeholder="First name">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Last name">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-mail">

        <!-- password -->
        <input type="password" id="password" class="form-control" name="password" placeholder="Choose a password">

        <div class="form-check m-2">
            <input class="form-check-input" type="checkbox" value="1" id="notifEvent" name="notifEvent">
            <label class="form-check-label" for="notifEvent">Notify me about special events</label><br>

            <input class="form-check-input" type="checkbox" value="1" id="notifCustom" name="notifCustom">
            <label class="form-check-label" for="notifCustom">Send notifications just for me</label><br>

            <input class="form-check-input" type="checkbox" value="1" id="notifSuggest" name="notifSuggest">
            <label class="form-check-label" for="notifSuggest">Send me suggestions of creators to follow</label><br>
        </div>

        <!-- Add data button -->
        <button class="btn my-4 rounded btn-raised btn-dark text-white" type="submit">Sign Me Up</button>

        <!-- reset form button -->
        <button class="btn my-4 rounded btn-raised btn-dark text-white" type="button" id="resetBtn">Clear</button>
    </form>
</div>

@endsection