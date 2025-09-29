@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-9 mx-auto ">
            <div class="card bg-secondary-subtle shadow p-2 mb-4 bg-body-tertiary rounded">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4 px-5">
                        <img src="{{ asset('storage/img/asset/' . ($Profile->Picture ?? 'default.jpg')) }}" class="profile rounded-3 border-success ms-2 mt-2 border-3 img-thumbnail">
                    </div>
                    <div class="col-lg py-1 ">
                        <h3 class="fw-medium text-center text-lg-start">
                            {{ $Profile->FullName ?? Auth::user()->name }}
                        </h3>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Phone</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->PhoneNumber ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Address</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->FullAddress ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Email</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Gender</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->Gender ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Date of birth</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->DateOfBirth ?? '-'}}</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Allergic</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->Allergic ?? '-'}}</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Height</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->Height ?? '-'}} Cm</p>
                            </div>
                        </div>
                        <div class="row py-0">
                            <div class="col-3">
                                <h6 class="fw-medium">Weight</h6>
                            </div>
                            <div class="col d-flex">
                                <h6 class="fw-medium">:</h6>
                                <p class="ms-2 mb-1">{{ $Profile->Weight ?? '-'}} kg</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <a href="/MyProfile/create" class=" btn w-100 px-5 mt-3 py-1 btn-success rounded-pill">
                    Edit Profile
                 </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2" >
        <div class="col-lg-9 mx-auto">
            <h5 class="text-center mt-2 mb-4">Manage Subscription</h5>
            <h6 class="fw-semibold">Your Subscription</h6>
            <div class=" mx-auto ">
                <div class="card shadow p-2 mb-4 bg-body-tertiary rounded-4 border-5 border-end-0 border-start-0 border-bottom-0  border-success rounded-bottom-2">
                    <div class="card-body">
                        @if ($Payment == null)
                            <div class="row">
                                <div class="col-lg">
                                    <h6 class="fw-semibold">Sport Nutrition Food <span class="badge bg-success">Recomendation For You</span></h6>
                                    <p>For all your High calorie and high protein food needs</p>
                                </div>
                                <div class="col-lg d-flex justify-content-end">
                                    <p><span class="badge bg-secondary px-2">This package is not yet active</span></p>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg">
                                    <h6 class="fw-semibold">{{ $Payment->Pricing->Title  }}<span class="badge bg-success">New</span></h6>
                                    <p>{{ $Payment->Pricing->Describe  }}</p>
                                    <p>{{ $Payment->created_at->format('j F Y') }} - {{ $Payment->created_at->addDays(30)->format('j F Y') }}</p>
                                </div>
                                <div class="col-lg d-flex justify-content-end">
                                    <p><span class="badge bg-success px-2">Active </span></p>
                                </div>
                                </div>
                        @endif


                        <div class="">
                            <hr class="border border-dark w-100 mb-0">
                        </div>
                        <div class="row px-5 d-flex -justify-content-center">
                            @if ($Payment == null || today()>$Payment->created_at->addDays(30))
                            <div class="col">
                                <a href="/Package" class=" btn w-100 px-5 mt-3 py-1 btn-success rounded-pill text-capitalize">
                                    Change Package
                                 </a>
                            </div>
                            @endif
                            <div class="col">
                                <a href="/register" class=" btn w-100 px-5 mt-3 py-1 btn-success rounded-pill text-capitalize">
                                    payment history
                                 </a>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<section class="background-1">
    <div class="container py-lg-5 py-4 ">
        <div class="row px-lg-5 px-3 mb-lg-3">
            <div class="col">
                <h5 class="fw-bold text-center text-white">
                    Your Food
                </h5>
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <select class="form-select rounded-4 bg-none py-1 text-white bg-transparent mt-3 mx-auto" aria-label="Default select example">
                            <option>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                @if ($Payment != null)
                <div class="multiple-items w-100 px-lg-5 mx-auto mt-lg-4 mt-4" id="multiple-items">
                   {{-- Sunday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuSunday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuSunday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuSunday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuSunday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuSunday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuSunday->FoodName3 ?? '-' }}</p>
                        </div>

                        <div class="middle-product-2 ">
                            <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Sunday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                Edit
                            </a>
                        </div>
                        <p class="text-center text-white mt-1">Sunday</p>
                    </div>
                    {{-- End Sunday --}}
                    {{-- Monday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuMonday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuMonday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuMonday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuMonday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuMonday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuMonday->FoodName3 ?? '-' }}</p>
                        </div>
                        @if ($Payment != null)
                            <div class="middle-product-2 ">
                                <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Monday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                    Edit
                                </a>
                            </div>
                        @endif
                        <p class="text-center text-white mt-1">Monday</p>
                    </div>
                    {{-- End Monday --}}
                    {{-- Thusday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuThusday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuThusday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuThusday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuThusday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuThusday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuThusday->FoodName3 ?? '-' }}</p>
                        </div>
                        <div class="middle-product-2 ">
                            <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Thusday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                Edit
                            </a>
                        </div>
                        <p class="text-center text-white mt-1">Thusday</p>
                    </div>
                    {{-- End Thusday --}}
                    {{-- Wednesday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuWednesday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuWednesday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuWednesday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuWednesday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuWednesday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuWednesday->FoodName3 ?? '-' }}</p>
                        </div>
                        <div class="middle-product-2 ">
                            <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Wednesday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                Edit
                            </a>
                        </div>
                        <p class="text-center text-white mt-1">Wednesday</p>
                    </div>
                    {{-- End Wednesday --}}
                    {{-- Thursday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuThursday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuThursday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuThursday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuThursday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuThursday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuThursday->FoodName3 ?? '-' }}</p>
                        </div>
                        <div class="middle-product-2 ">
                            <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Thursday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                Edit
                            </a>
                        </div>
                        <p class="text-center text-white mt-1">Thursday</p>
                    </div>
                    {{-- End Thursday --}}
                    {{-- Friday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuFriday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuFriday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuFriday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuFriday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuFriday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuFriday->FoodName3 ?? '-' }}</p>
                        </div>
                        <div class="middle-product-2 ">
                            <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Friday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                Edit
                            </a>
                        </div>
                        <p class="text-center text-white mt-1">Friday</p>
                    </div>
                    {{-- End Friday --}}
                    {{-- Saturday --}}
                    <div class="container product">
                        <div class="card bg-transparent  price-product " >
                            <div class="card-body text-white border border-3 rounded-3 p-0">
                                <img class="TN-4 img-fluid rounded-top-3 w-100" style="max-height: 120px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuSaturday->Picture1 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuSaturday->Picture2 ?? 'default.jpg')) }}">
                                <img class="TN-4 img-fluid rounded-bottom-3 w-100" style="max-height: 110px" src="{{ asset('storage/img/asset/' . ($FoodSchedules->MenuSaturday->Picture3 ?? 'default.jpg')) }}">
                            </div>
                        </div>
                        <div class="col mt-5 text-white middle-product-text1">
                            <p>{{ $FoodSchedules->MenuSaturday->FoodName1 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text2">
                            <p>{{ $FoodSchedules->MenuSaturday->FoodName2 ?? '-' }}</p>
                        </div>
                        <div class="col mt-5 text-white middle-product-text3">
                            <p>{{ $FoodSchedules->MenuSaturday->FoodName3 ?? '-' }}</p>
                        </div>
                        <div class="middle-product-2 ">
                            <a href="{{ route('EditMenu',['FoodScheduleId'=>$FoodSchedules->id,'Day'=>'Saturday']) }}" class=" btn px-lg-5 py-1 btn-light text-success btn-overlay rounded-pill w-lg-75 text-center">
                                Edit
                            </a>
                        </div>
                        <p class="text-center text-white mt-1">Saturday</p>
                    </div>
                    {{-- End Saturday --}}


                </div>
                @endif
            </div>
        </div>

    </div>
</section>
<div class="container py-5">
    <h5 class="fw-bold text-center ">
        Your Statistic
    </h5>
    <p class="text-center">
        your body statistic data from <br>smartband
    </p>
    <div class="row mt-4">
        <div class="mx-auto d-flex justify-content-center">
                <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-lg mx-auto align-self-center">
            <p class="mb-0">
                RECAP
             </p>
             <h4 class="fw-bold  text-capitalize">
                 your <br>
                 achievements
             </h4>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body rounded-3 card-achievements text-center">
                    <h5 class="fw-semibold">Overall Achievement</h5>
                    <div class="row">
                        <div class="col">
                            <div class="progress-bar mt-2" style="width: 150px; height: 150px; border-radius: 50%; position: relative; background: radial-gradient(closest-side, #009432 85%, transparent 80% 100%), conic-gradient(#73CFD4 60%, white 0);">
                                <progress value="75" min="0" max="100" style="visibility: hidden; height: 0; width: 0;">75%</progress>
                                <span class="percentage"><p class="mb-0" style="font-size: 8px !important;">Quality</p> <h5 class="fw-semibold">61.22 %</h5></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body rounded-3 card-achievements text-center">
                    <h5 class="fw-semibold">Exercise</h5>
                    <div class="row">
                        <div class="col">
                            <div class="progress-bar mt-2" style="width: 150px; height: 150px; border-radius: 50%; position: relative; background: radial-gradient(closest-side, #009432 85%, transparent 80% 100%), conic-gradient(#73CFD4 70%, white 0);">
                                <progress value="75" min="0" max="100" style="visibility: hidden; height: 0; width: 0;">75%</progress>
                                <span class="percentage"><p class="mb-0" style="font-size: 8px !important;">Quality</p> <h5 class="fw-semibold">70.03 %</h5></span>
                            </div>
                        </div>
                        <div class="col align-self-center text-start">
                            <h5 class="fw-semibold mb-0 d-flex">1050 <p class="mb-0 align-self-center">/kcal</p></h5>
                            <p style="font-size: 8px !important;">Burned</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body rounded-3 card-achievements text-center">
                    <h5 class="fw-semibold">Nutrition</h5>
                    <div class="row">
                        <div class="col">
                            <div class="progress-bar mt-2" style="width: 150px; height: 150px; border-radius: 50%; position: relative; background: radial-gradient(closest-side, #009432 85%, transparent 80% 100%), conic-gradient(#73CFD4 50%, white 0);">
                                <progress value="75" min="0" max="100" style="visibility: hidden; height: 0; width: 0;">75%</progress>
                                <span class="percentage"><p class="mb-0" style="font-size: 8px !important;">Quality</p> <h5 class="fw-semibold">50.19 %</h5></span>
                            </div>
                        </div>
                        <div class="col align-self-center text-start">
                            <h5 class="fw-semibold mb-0 d-flex">618 <p class="mb-0 align-self-center">/kcal</p></h5>
                            <p style="font-size: 8px !important;">Consumed</p>
                            <h5 class="fw-semibold mb-0 d-flex">1882 <p class="mb-0 align-self-center">/kcal</p></h5>
                            <p style="font-size: 8px !important;">Remaining</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body rounded-3 card-achievements text-center">
                    <h5 class="fw-semibold">Heart Rate</h5>
                    <div class="row">
                        <div class="col">
                            <div class="progress-bar mt-2" style="width: 150px; height: 150px; border-radius: 50%; position: relative; background: radial-gradient(closest-side, #009432 85%, transparent 80% 100%), conic-gradient(#73CFD4 85%, white 0);">
                                <progress value="75" min="0" max="100" style="visibility: hidden; height: 0; width: 0;">75%</progress>
                                <span class="percentage"><p class="mb-0" style="font-size: 8px !important;">Quality</p> <h5 class="fw-semibold">82.13 %</h5></span>
                            </div>
                        </div>
                        <div class="col align-self-center text-start">
                            <h5 class="fw-semibold mb-0 d-flex">90 <p class="mb-0 align-self-center">/bpm</p></h5>
                            <p style="font-size: 8px !important;">Avg Heart rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>


@endsection

