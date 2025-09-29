@extends('layouts.app')

@section('content')
<div class="container pb-5">
<form action="{{ route('Menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @for ($i = 1; $i <= 3; $i++)
        <div class="row py-3">
            <div class="col-lg px-5 border border-success p-4 rounded-3 ">
                    <h5 class="fw-semibold">Menu {{ $i }}</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-4">
                            <div class="form-group mb-1">
                                <label for="Picture{{ $i }}" class="form-label mb-0"><p class="mb-0">Choose Your Picture Profile </p> </label>
                                <input id="Picture{{ $i }}" placeholder="Picture" type="file" class="form-control border-success rounded-pill @error('Picture{{ $i }}') is-invalid @enderror" name="Picture{{ $i }}" autocomplete="Picture">
                                @error('Picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="FoodName{{ $i }}" class="form-label mb-0"><p class="mb-0">Food Name</p></label>
                                <input id="FoodName{{ $i }}"  type="text" class="form-control border-success rounded-pill @error('FoodName{{ $i }}') is-invalid @enderror" name="FoodName{{ $i }}"   autocomplete="FoodName">
                                @error('FoodName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="FoodDescribe{{ $i }}" class="form-label mb-0"><p class="mb-0">Food Describe</p></label>
                                <textarea class="form-control border-success @error('FoodDescribe{{ $i }}') is-invalid @enderror"  placeholder="Do you have any dietary restrictions or allergies?" id="FoodDescribe{{ $i }}" name="FoodDescribe{{ $i }}" rows="3"></textarea>
                                @error('FoodDescribe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-1">
                                <label for="FoodKalori{{ $i }}" class="form-label mb-0"><p class="mb-0">Food Kalori</p></label>
                                <input id="FoodKalori{{ $i }}"  type="text" class="form-control border-success rounded-pill @error('FoodKalori{{ $i }}') is-invalid @enderror" name="FoodKalori{{ $i }}"  autocomplete="FoodKalori">
                                @error('FoodKalori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="FoodProtein{{ $i }}" class="form-label mb-0"><p class="mb-0">Food Protein</p></label>
                                <input id="FoodProtein{{ $i }}"  type="text" class="form-control border-success rounded-pill @error('FoodProtein{{ $i }}') is-invalid @enderror" name="FoodProtein{{ $i }}"   autocomplete="FoodProtein">
                                @error('FoodProtein')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="FoodFat{{ $i }}" class="form-label mb-0"><p class="mb-0">Food Fat</p></label>
                                <input id="FoodFat{{ $i }}"  type="text" class="form-control border-success rounded-pill @error('FoodFat') is-invalid @enderror" name="FoodFat{{ $i }}"  autocomplete="FoodFat">
                                @error('FoodFat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-1">
                                <label for="FoodCarbohydrates" class="form-label mb-0"><p class="mb-0">Food Carbohydrates</p></label>
                                <input id="FoodCarbohydrates"  type="text" class="form-control border-success rounded-pill @error('FoodCarbohydrates') is-invalid @enderror" name="FoodCarbohydrates{{ $i }}"  autocomplete="FoodCarbohydrates">
                                @error('FoodCarbohydrates')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label for="FoodFiber" class="form-label mb-0"><p class="mb-0">Food Fiber</p></label>
                                <input id="FoodFiber"  type="text" class="form-control border-success rounded-pill @error('FoodFiber') is-invalid @enderror" name="FoodFiber{{ $i }}"   autocomplete="FoodFiber">
                                @error('FoodFiber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                      </div>
                    </div>
            </div>
        </div>
        @endfor
    
    <div class="row mt-4">
        <div class="col-lg d-flex justify-content-end column-gap-3 ">
            <a href="/MyProfile" class="w-25 btn bg-body-secondary rounded-pill">
                Cancel
            </a>
            <button type="submit" class=" w-25 btn btn-success rounded-pill">
                Save
            </button>
           
        </div>
    </div>
    
</form>
</div>
@endsection
