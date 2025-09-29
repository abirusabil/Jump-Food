@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('Testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row column-gap-5">
        <div class="col-lg px-5 border border-success p-4 rounded-3 ">
                <h5 class="fw-semibold">Testimonials</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group mb-1">
                        <label for="Picture" class="form-label mb-0"><p class="mb-0">Choose Your Picture Profile </p> </label>
                        <input id="Picture" placeholder="Picture" type="file" class="form-control border-success rounded-pill @error('Picture') is-invalid @enderror" name="Picture" value="{{ old('Picture') }}"  autocomplete="Picture">
                        @error('Picture')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="FullName" class="form-label mb-0"><p class="mb-0">Full Name</p></label>
                        <input id="FullName"  type="text" class="form-control border-success rounded-pill @error('FullName') is-invalid @enderror" name="FullName" value="{{ old('FullName') }}"  autocomplete="FullName">
                        @error('FullName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="Job" class="form-label mb-0"><p class="mb-0">Job</p></label>
                        <input id="Job"  type="text" class="form-control border-success rounded-pill @error('Job') is-invalid @enderror" name="Job" value="{{ old('Job') }}"  autocomplete="Job">
                        @error('Job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="Tagline" class="form-label mb-0"><p class="mb-0">Tagline</p></label>
                        <input id="Tagline"  type="text" class="form-control border-success rounded-pill @error('Tagline') is-invalid @enderror" name="Tagline" value="{{ old('Tagline') }}"  autocomplete="Tagline">
                        @error('Tagline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="Coment" class="form-label mb-0"><p class="mb-0">Coment</p></label>
                        <textarea class="form-control border-success @error('Coment') is-invalid @enderror"  placeholder="How active are you daily" id="Coment" name="Coment" rows="3"></textarea>
                        @error('Coment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="col-lg d-flex justify-content-end column-gap-3 mt-2 ">
                    <a href="/Admin" class="w-25 btn bg-body-secondary rounded-pill">
                        Cancel
                    </a>
                    <button type="submit" class=" w-25 btn btn-success rounded-pill">
                        Save
                    </button>
                   
                </div>
        </div>
    </div>
    </div>
    
</form>
</div>
@endsection
