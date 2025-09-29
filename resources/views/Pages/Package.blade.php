@extends('layouts.app')

@section('content')

<section class="background-1 pb-2 pt-2">
    <div class="container my-5 py-5"> 
        <div class="row">
            <div class="col">
                <h5 class="fw-bold text-capitalize mb-0 text-center text-white">Pricing</h5>
                <p class="text-center text-white mb-5">Special offers just for you</p>
            </div>
        </div>
        <div class="row mx-5 px-4 mt-3">
            .@foreach ($Prices as $Price)
                <div class="col ">
                    <div class="container product">
                        <div class="card bg-transparent border price-product  border-3 rounded-4  border-white" style="width: 190px ;height:190px;" >
                            <div class="card-body text-white ">
                            <h6 class="text-center fw-semibold" style="height: 25px"> {{ $Price->Title }}</h6>
                            <p class="mb-0">Rp.</p>
                            <h4 class="fw-Medium mb-0 text-center">{{ number_format($Price->Price,2) }}</h4>
                            <p class="text-end">/1 Month</p>
                            <p class="mb-0 fw-semibold text-center">{{ $Price->Describe }}</p>
                            </div>
                        </div>
                        <div class="middle-product">
                            <a href="{{ route('DetailPayment',['id'=>$Price->id]) }}" class=" px-5 py-1 btn btn-light text-success btn-overlay rounded-pill me-2 text">
                                Choose
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
