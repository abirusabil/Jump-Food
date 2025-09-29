@extends('layouts.app')

@section('content')
<div class="container pb-5">
<form action="{{ route('MyProfile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row column-gap-5">
        <input type="hidden" value="{{ Auth::user()->id }}" name="UserId">
        <div class="col-lg px-5 border border-success p-4 rounded-3 ">
                <h5 class="fw-semibold">Personal Info</h5>
                <p>Be assured, your privacy is our priority</p>
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
                        <label for="PhoneNumber" class="form-label mb-0"><p class="mb-0">Phone Number</p></label>
                        <input id="PhoneNumber"  type="text" class="form-control border-success rounded-pill @error('PhoneNumber') is-invalid @enderror" name="PhoneNumber" value="{{ old('PhoneNumber') }}"  autocomplete="PhoneNumber">
                        @error('PhoneNumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="Gender" class="form-label mb-0"><p class="mb-0">Gender</p></label>
                        <select class="form-control border-success   rounded-pill @error('Gender') is-invalid @enderror"  id="Gender" name="Gender" value="{{ old('Gender') }}" aria-label="Default select example">
                            <option checked></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('Gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="DateOfBirth" class="form-label mb-0"><p class="mb-0">Date Of Birth</p></label>
                        <input id="DateOfBirth" type="date" class="form-control border-success rounded-pill @error('DateOfBirth') is-invalid @enderror" name="DateOfBirth" value="{{ old('DateOfBirth') }}"  autocomplete="DateOfBirth">
                        @error('DateOfBirth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="FullAddress" class="form-label mb-0"><p class="mb-0">Full Address</p></label>
                        <input id="FullAddress" type="text" class="form-control border-success rounded-pill @error('FullAddress') is-invalid @enderror" name="FullAddress" value="{{ old('FullAddress') }}"  autocomplete="FullAddress">
                        @error('FullAddress')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="Weight" class="form-label mb-0"><p class="mb-0">Weight</p></label>
                        <input id="Weight"  type="text" class="form-control border-success rounded-pill @error('Weight') is-invalid @enderror" name="Weight" value="{{ old('Weight') }}"  autocomplete="Weight">
                        @error('Weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-1">
                        <label for="Height" class="form-label mb-0"><p class="mb-0">Height</p></label>
                        <input id="Height"  type="text" class="form-control border-success rounded-pill @error('Height') is-invalid @enderror" name="Height" value="{{ old('Height') }}"  autocomplete="Height">
                        @error('Height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                </div>
        </div>
        <div class="col-lg px-5 border border-success p-4 rounded-3 ">
            <h5 class="fw-semibold">Additional Info</h5>
            <p>We assure you that the information provided will be kept confidential and secure with us.</p>
        <div class="card-body">
            <div class="row">
                <div class="form-group mb-1">
                    <textarea class="form-control border-success @error('Activity') is-invalid @enderror"  placeholder="How active are you daily" id="Activity" name="Activity" rows="3"></textarea>
                    @error('Activity')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <textarea class="form-control border-success @error('Allergic') is-invalid @enderror"  placeholder="Do you have any dietary restrictions or allergies?" id="Allergic" name="Allergic" rows="3"></textarea>
                    @error('Allergic')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <textarea class="form-control border-success @error('SpecificDiet') is-invalid @enderror"  placeholder="Are you currently following a specific diet? (e.g., Vegan, Vegetarian, Keto, Gluten-Free, etc.)" id="SpecificDiet" name="SpecificDiet" rows="3"></textarea>
                    @error('SpecificDiet')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <textarea class="form-control border-success @error('HealthCondition') is-invalid @enderror"  placeholder="Do you have any specific health conditions we should be aware of? (e.g., Diabetes, High blood pressure, etc.)" id="HealthCondition" name="HealthCondition" rows="3"></textarea>
                    @error('HealthCondition')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <textarea class="form-control border-success @error('PrimaryGoal') is-invalid @enderror"  placeholder="What is your primary goal? (e.g., Weight loss, Muscle gain, Maintain current weight, Improve overall health)" id="PrimaryGoal" name="PrimaryGoal" rows="3"></textarea>
                    @error('PrimaryGoal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        </div>
    </div>
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
