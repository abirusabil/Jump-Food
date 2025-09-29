@extends('layouts.app')

@section('content')

<div class="container pb-4 pb-lg-2">
    <div class="row">
        <div class="col">
            <p class="text-capitalize mb-0">determine your taste</p>
            <h3 class="fw-bold text-capitalize mb-3">
                Choose your food For {{ $Day }}
            </h3>
        </div>
        <div class="col d-flex justify-content-end me-3 align-self-lg-center">
            <div class="btn-carousel d-flex">
                <button class="carousel-control-prev me-2" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <i class="fa-solid fa-arrow-left bt2 w-100"></i>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                   <i class="fa-solid fa-arrow-right bt2 w-100"></i>
                </button>
            </div>
        </div>
    </div>
    
    <div id="carouselExample" class="carousel slide  ">
        <div class="row">
            <div class="col">
                <div class="carousel-inner px-3">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($Menus as $Menu)
                        @php
                            $i++;
                        @endphp
                        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                            <div class="row column-gap-4">
                                @for ($i = 1; $i <= 3 ; $i++)
                                    <div class="col-lg mt-2 mt-lg-0">
                                        <div class="row border solid border-success p-3 rounded-3">
                                            <div class="col-lg-6 p-0 align-self-lg-center">
                                                @php
                                                    $Picture = 'Picture' . $i;
                                                    $FoodName = 'FoodName' . $i;
                                                    $FoodDescribe = 'FoodDescribe' . $i;
                                                    $FoodKalori = 'FoodKalori' . $i;
                                                    $FoodProtein = 'FoodProtein' . $i;
                                                    $FoodFat = 'FoodFat' . $i;
                                                    $FoodCarbohydrates = 'FoodCarbohydrates' . $i;
                                                    $FoodFiber = 'FoodFiber' . $i;
                                                @endphp
                                                <img class="TN-4 rounded-3 border img-fluid" src="{{ asset('storage/img/asset/' . ($Menu->$Picture ?? 'default.jpg')) }}">
                                            </div>
                                            
                                            <div class="col-lg ps-lg-3 p-0 " >
                                                <div class="headermenu">
                                                    <h5 class=" text-center text-lg-start mt-lg-o   mb-1">
                                                        {{ $Menu->$FoodName }}
                                                    </h5>
                                                    <p class="text-secondary fw-lighter mt-2 " style="font-size: 10px  !important; text-align:justify;">
                                                        {{ $Menu->$FoodDescribe }}
                                                    </p>
                                                </div>
                                                <div class="textmenu">
                                                    <p class=" mb-1 fw-semibold text-secondary">Nutritional Content:</p>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="text-secondary align-self-center mb-1">Kalori</p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="mb-1">{{ $Menu->$FoodKalori }}</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="text-secondary align-self-center mb-1">Protein 
                                                        </p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="mb-1">{{ $Menu->$FoodProtein }}</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="text-secondary align-self-center mb-1">Fat 
                                                        </p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="mb-1">{{ $Menu->$FoodFat }}</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="text-secondary align-self-center mb-1">Carbohydrates 
                                                        </p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="mb-1">{{ $Menu->$FoodCarbohydrates }}</p>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="text-secondary align-self-center mb-1">Fiber 
                                                        </p>
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="mb-1">{{ $Menu->$FoodFiber }}</p>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <form action="/FoodSchedule/{{ $FoodScheduleId }}" method="Post">
                                @method('put')
                                @csrf
                                <input type="hidden" name="FoodScheduleId" value="{{ $FoodScheduleId }}">
                                <input type="hidden" name="MenuId" value="{{ $Menu->id }}">
                                <input type="hidden" name="Day" value="{{ $Day }}">
                                <button type="submit" class=" btn w-100 mt-4  py-1 btn-success text-capitalize rounded-pill">Choose Package</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
       
    </div>
   
</div>

@endsection


