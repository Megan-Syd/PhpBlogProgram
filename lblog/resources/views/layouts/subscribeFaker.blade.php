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

    <h1 class="m-5">Register</h1>
    <form class="text-center p-5" action="{{route('store') }}" method="POST">

        {{csrf_field()}}

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="firstName" class="form-control" name="firstName" placeholder="First name" value="{{ $fakeData['firstName'] }}">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Last name" value="{{ $fakeData['lastName'] }}">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-mail" value="{{ $fakeData['email'] }}">

        <!-- password -->
        <input type="password" id="password" class="form-control" name="password" placeholder="Choose a password" value="{{ $fakeData['password'] }}">

        <div class="form-check m-2">
            <input class="form-check-input" type="checkbox" value="1" id="notifEvent" name="notifEvent" @if($fakeData['notifEvent']) checked @endif>
            <label class="form-check-label" for="notifEvent">Notify me about special events</label><br>

            <input class="form-check-input" type="checkbox" value="1" id="notifCustom" name="notifCustom" @if($fakeData['notifCustom']) checked @endif>
            <label class="form-check-label" for="notifCustom">Send notifications just for me</label><br>

            <input class="form-check-input" type="checkbox" value="1" id="notifSuggest" name="notifSuggest" @if($fakeData['notifSuggest']) checked @endif>
            <label class="form-check-label" for="notifSuggest">Send me suggestions of creators to follow</label><br>
        </div>




        <!-- Add data button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

    </form>
</div>
@endsection