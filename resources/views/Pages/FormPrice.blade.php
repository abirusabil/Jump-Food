@extends('layouts.app')

@section('content')
<div class="container">
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
                    <form method="POST" action="{{ route('Price.store') }}">
                        @csrf
                            <div class="form-group">
                                <input id="Title" placeholder="Name Package" type="text" class="form-control rounded-pill @error('Title') is-invalid @enderror" name="Title" value="{{ old('Title') }}" required autocomplete="Title" autofocus>
                                @error('Title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="Price" placeholder="Price Package" type="number" class="form-control rounded-pill @error('Price') is-invalid @enderror" name="Price" value="{{ old('Price') }}" required autocomplete="Price" autofocus>
                                @error('Price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <textarea class="form-control border-success @error('Describe') is-invalid @enderror"  placeholder="Describe The Package" id="Describe" name="Describe" rows="3"></textarea>
                                @error('Describe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group mt-5">
                                <button type="submit" class=" w-100 btn btn-success rounded-pill">
                                    Save
                                </button>
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
