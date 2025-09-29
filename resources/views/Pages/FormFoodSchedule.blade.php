@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col ms-lg-4">
            
            <div class="row">
                <div class="col">
                    <form method="POST" action="{{ route('FoodSchedule.store') }}">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="row my-4">
                                    <div class="col">
                                        <h2 class="text-capitalize">
                                            Form Food Schedule
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistUserId" name="UserId" id="exampleDataList" placeholder="Select Customer...">
                                            <datalist id="datalistUserId">
                                                @foreach ($Users as $User)
                                                    <option value="{{ $User->id }}">{{ $User->name }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistSunday" name="Sunday" id="exampleDataList" placeholder="Select Menus For Sunday...">
                                            <datalist id="datalistSunday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistMonday" name="Monday" id="exampleDataList" placeholder="Select Menus For Monday...">
                                            <datalist id="datalistMonday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistThusday" name="Thusday" id="exampleDataList" placeholder="Select Menus For Thusday...">
                                            <datalist id="datalistThusday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistWednesday" name="Wednesday" id="exampleDataList" placeholder="Select Menus For Wednesday...">
                                            <datalist id="datalistWednesday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistThursday" name="Thursday" id="exampleDataList" placeholder="Select Menus For Thursday...">
                                            <datalist id="datalistThursday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistFriday" name="Friday" id="exampleDataList" placeholder="Select Menus For Friday...">
                                            <datalist id="datalistFriday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="form-group ">
                                            <input class="form-control rounded-pill border border-success" list="datalistSaturday" name="Saturday" id="exampleDataList" placeholder="Select Menus For Saturday...">
                                            <datalist id="datalistSaturday">
                                                @foreach ($Menus as $Menu)
                                                    <option value="{{ $Menu->id }}">{{ $Menu->FoodName1 }} | {{ $Menu->FoodName2 }} | {{ $Menu->FoodName3 }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-100 mt-2 text-end pe-3">
                                <button type="submit" class="w-25 float-end btn btn-success rounded-pill border border-success">
                                    Save
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>  
        </div>
       
    </div>
</div>
@endsection
