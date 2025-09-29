@extends('layouts.app')

@section('content')
<div class="container py-5 w-75">
    <div class="row ">
        <div class="col-md-5 ms-lg-4">
            <div class="row my-4">
                <div class="col">
                    <h2 class="text-capitalize">
                        Start your day <br> with healthy food
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <input id="name" placeholder="Name" type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Repeat Password" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group mt-5">
                                <button type="submit" class=" w-100 btn btn-success rounded-pill">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="/login" class=" w-100 btn bg-body-secondary rounded-pill">
                                    I have an account
                                </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col p-5 align-self-center">
            <i class="fa-solid fa-quote-left"></i>
            <h3>Food for the body is not enough. There must be food for the soul. </h3>
            <i class="fa-solid fa-quote-right"></i>
            <p>-Dorothy Day</p>
        </div>
    </div>
</div>
@endsection
