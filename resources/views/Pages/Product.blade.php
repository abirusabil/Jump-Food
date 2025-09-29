@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <h5 class="fw-bold text-capitalize mb-0">our product</h5>
    <p >Choose a food package to your needs</p>
    <div class="row mx-4 mt-4 ">
        <div class="col px-4 d mx-auto">
            <div class="container product">
                <img src="{{ asset('storage/img/asset/1705809878_Caprese Wrap with Chicken.JPG') }}" class="img-thumbnail img-product border-0 rounded-4 mx-auto d-block shadow mb-1 p-0  bg-body-tertiary rounded" style="height: 320px ; width:320px ;">
                <div class="middle-product">
                    <a href="#SportNutrition" class=" btn px-5 py-1 btn-success btn-overlay rounded-pill me-2 text">
                        Detail
                    </a>
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="col-9">
                    <h5 class="fw-semibold mb-1">Sport Nutrition Food</h5>
                    <p>Food packages with sports nutrition measures</p>
                </div>
                <div class="col d-flex justify-content-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 23" fill="none">
                        <path d="M10.3646 0.77312L7.5304 6.51965L1.18926 7.44413C0.052104 7.60906 -0.403625 9.01097 0.421028 9.81392L5.0087 14.2844L3.92363 20.5995C3.72832 21.741 4.93058 22.596 5.93752 22.0622L11.6103 19.0804L17.283 22.0622C18.29 22.5917 19.4922 21.741 19.2969 20.5995L18.2118 14.2844L22.7995 9.81392C23.6242 9.01097 23.1684 7.60906 22.0313 7.44413L15.6901 6.51965L12.8559 0.77312C12.3481 -0.251186 10.8768 -0.264207 10.3646 0.77312Z" fill="#FFC312"/>
                    </svg>
                    <h5 class="ms-1">4.5</h5>
                </div>
            </div>
        </div>
        <div class="col px-4 d mx-auto">
            <div class="container product">
                <img src="{{ asset('storage/img/asset/1705810276_Mediterranean Quinoa Salad with Shrimp.jpg') }}" class="img-thumbnail img-product border-0 rounded-4 mx-auto d-block shadow mb-1 p-0  bg-body-tertiary rounded" style="height: 320px ; width:320px ;">
                <div class="middle-product">
                    <a href="#Balanced" class=" btn px-5 py-1 btn-success btn-overlay rounded-pill me-2 text">
                        Detail
                    </a>
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="col-9">
                    <h5 class="fw-semibold mb-1">Balanced Food</h5>
                    <p >Food packages with balanced nutrition</p>
                </div>
                <div class="col d-flex justify-content-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 23" fill="none">
                        <path d="M10.3646 0.77312L7.5304 6.51965L1.18926 7.44413C0.052104 7.60906 -0.403625 9.01097 0.421028 9.81392L5.0087 14.2844L3.92363 20.5995C3.72832 21.741 4.93058 22.596 5.93752 22.0622L11.6103 19.0804L17.283 22.0622C18.29 22.5917 19.4922 21.741 19.2969 20.5995L18.2118 14.2844L22.7995 9.81392C23.6242 9.01097 23.1684 7.60906 22.0313 7.44413L15.6901 6.51965L12.8559 0.77312C12.3481 -0.251186 10.8768 -0.264207 10.3646 0.77312Z" fill="#FFC312"/>
                    </svg>
                    <h5 class="ms-1">4.8</h5>
                </div>
            </div>

        </div>
        <div class="col px-4 d mx-auto">
            <div class="container product">
                <img src="{{ asset('storage/img/asset/1705931749_Fried meat with green sauce.png') }}" class="img-thumbnail img-product border-0 rounded-4 mx-auto d-block shadow mb-1 p-0  bg-body-tertiary rounded" style="height: 320px ; width:320px ;">
                <div class="middle-product">
                    <a href="#LowCalorie" class=" btn px-5 py-1 btn-success btn-overlay rounded-pill me-2 text">
                        Detail
                    </a>
                </div>
            </div>
            <div class="row px-3 pt-2">
                <div class="col-9">
                    <h5 class="fw-semibold mb-1">Low Calorie Food</h5>
                    <p >Food packages with sufficient nutrition and low calories</p>
                </div>
                <div class="col d-flex justify-content-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 23" fill="none">
                        <path d="M10.3646 0.77312L7.5304 6.51965L1.18926 7.44413C0.052104 7.60906 -0.403625 9.01097 0.421028 9.81392L5.0087 14.2844L3.92363 20.5995C3.72832 21.741 4.93058 22.596 5.93752 22.0622L11.6103 19.0804L17.283 22.0622C18.29 22.5917 19.4922 21.741 19.2969 20.5995L18.2118 14.2844L22.7995 9.81392C23.6242 9.01097 23.1684 7.60906 22.0313 7.44413L15.6901 6.51965L12.8559 0.77312C12.3481 -0.251186 10.8768 -0.264207 10.3646 0.77312Z" fill="#FFC312"/>
                    </svg>
                    <h5 class="ms-1">4.6</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="background-1 pb-3 pt-2">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col">
                <h5 class="fw-bold text-capitalize mb-0 text-center text-white">Pricing</h5>
                <p class="text-center text-white mb-5">Special offers just for you</p>
            </div>
        </div>
        <div class="row mx-5 px-4 mt-3">
            @foreach ($Prices as $Price)
                <div class="col ">
                    <div class="container product">
                        <div class="card bg-transparent border   border-3 rounded-4  border-white" style="width: 190px ;height:190px;" >
                            <div class="card-body text-white ">
                            <h6 class="text-center fw-semibold" style="height:25px; ">{{ $Price->Title }}</h6>
                            <p class="mb-0">Rp.</p>
                            <h4 class="fw-Medium mb-0 text-center">{{ number_format($Price->Price,2) }}</h4>
                            <p class="text-end">/1 Month</p>
                            <p class="mb-0 text-center">{{ $Price->Describe }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="row w-75 mx-auto py-5" id="SportNutrition">
        <div class="col-lg-4">
            <img src="{{ asset('storage/img/asset/1705809878_Caprese Wrap with Chicken.JPG') }}" class="Product-2 rounded-3 border-success ms-2 mt-2 border-3 p-0 img-thumbnail ">
        </div>
        <div class="col-lg py-1">
            <h3 class="fw-semibold text-center text-lg-start mt-2 mb-0">
                Sport Nutrition Food
            </h3>
            <p>
                Food packages with balanced nutrition for daily life
            </p>
            <h5 class="fw-semibold mt-5">Nutrition Facts</h5>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Carbohydrate</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Proteins</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Amino Acids</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Electrolytes</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Fat</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Vitamin</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Mineral</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Water</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row w-75 mx-auto py-5" id="Balanced">
        <div class="col-lg-4">
            <img src="{{ asset('storage/img/asset/1705810276_Mediterranean Quinoa Salad with Shrimp.jpg') }}" class="Product-2 rounded-3 border-success ms-2 mt-2 border-3 p-0 img-thumbnail ">
        </div>
        <div class="col-lg py-1 " >
            <h3 class="fw-semibold text-center text-lg-start mt-2 mb-0">
                Balanced Food
            </h3>
            <p>
                Food packages with balanced nutrition for daily life
            </p>
            <h5 class="fw-semibold mt-5">Nutrition Facts</h5>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Carbohydrate</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Proteins</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Amino Acids</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Electrolytes</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Fat</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Vitamin</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Mineral</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Water</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row w-75 mx-auto py-5" id="LowCalorie">
        <div class="col-lg-4">
            <img src="{{ asset('storage/img/asset/1705931749_Fried meat with green sauce.png') }}" class="Product-2 rounded-3 border-success ms-2 mt-2 border-3 p-0 img-thumbnail ">
        </div>
        <div class="col-lg py-1" >
            <h3 class="fw-semibold text-center text-lg-start mt-2 mb-0">
                Low Calorie Food
            </h3>
            <p>
                Food packages with adequate nutrition and low in calories to support the diet program
            </p>
            <h5 class="fw-semibold mt-5">Nutrition Facts</h5>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Carbohydrate</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Proteins</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Amino Acids</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Electrolytes</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Fat</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Vitamin</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Mineral</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <h6 class="fw-medium align-self-center mb-0">Water</h6>
                </div>
                <div class="col-lg-7 align-self-center">
                    @php
                        $angka_acak = rand(70, 90)
                    @endphp
                    <div class="progress" role="progressbar" aria-label=" Example 20px high" aria-valuenow="{{ $angka_acak }}" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                        <div class="progress-bar bg-success" style="width: {{ $angka_acak }}%"></div>
                      </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
