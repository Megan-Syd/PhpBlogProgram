<!-- for a user to edit their account information -->

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

    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif


    <h1 class="m-5">Edit Account</h1>
    <form class="text-center p-5" action="{{ route('update', $subscriber->id) }}" method="POST">
        {{ csrf_field() }}

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="firstName" class="form-control" name="firstName" placeholder="First name" value="{{ $subscriber->first_name }}">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Last name" value="{{ $subscriber->last_name }}">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-mail" value="{{ $subscriber->email }}">

        <!-- Preferences -->
        <div class="form-check m-2">
            <input class="form-check-input" type="checkbox" value="1" id="notifEvent" name="notifEvent" {{ $subscriber->notif_event ? 'checked' : '' }}>
            <label class="form-check-label" for="notifEvent">Notify me about special events</label><br>

            <input class="form-check-input" type="checkbox" value="1" id="notifCustom" name="notifCustom" {{ $subscriber->notif_custom ? 'checked' : '' }}>
            <label class="form-check-label" for="notifCustom">Send notifications just for me</label><br>

            <input class="form-check-input" type="checkbox" value="1" id="notifSuggest" name="notifSuggest" {{ $subscriber->notif_suggest ? 'checked' : '' }}>
            <label class="form-check-label" for="notifSuggest">Send me suggestions of creators to follow</label><br>

        </div>

        <!-- Update account button -->
        <button class="btn btn-dark btn-raised rounded m-4" type="submit">Submit Changes</button>
    </form>
    <div class="row justify-content-center mb-5">
        <!-- Cancel update button -->
        <button type="button" class="btn rounded btn-raised btn-outline-dark m-4 float-end"><a class="text-dark" href="javascript:history.go(-1)">Cancel Changes</a></button>

        <!-- Delete account button -->
        <form method="POST" action="{{ route('delete', $subscriber->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete your account? All data will be lost.')" class="btn rounded btn-warning btn-raised m-4">Delete My Account</button>
        </form>
    </div>
</div>
@endsection