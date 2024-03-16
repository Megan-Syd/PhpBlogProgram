@extends('layouts.main')
@section('content')

<div class="container">
    <!-- Background image -->
    <div class="p-5 text-center">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-dark">
                    <h1 class="m-5">Welcome</h1>
                    <h4 class="mb-5">Choose your path to get started</h4>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col" style="border-right: 2px solid slategrey;">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email"><br>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn rounded btn-raised btn-dark">Sign In</button>
                            </form>
                            <p>Don't have an account? <u><a class="text-dark" href="{{ route('subscribe') }}"><br>Register here.</a></u></p>
                        </div>
                        <div class="col">
                            <h5>Administrators Access</h5>
                            <p>Sign in <u><a class="text-dark" href="{{ route('admin') }}">here.</a></u></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</div>
@endsection