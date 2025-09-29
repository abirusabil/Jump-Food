@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="row">
        <div class="col d-flex justify-content-center">
                <div class="card bg-transparent border   border-4 rounded-4  border-success" style="width: 200px ;height:200px;" >
                    <div class="card-body text-success ">
                    <h6 class="text-center fw-semibold"> {{ $Pricings->Title }}</h6>
                    <p class="mb-0">Rp.</p>
                    <h4 class="fw-Medium mb-0 text-center">{{ number_format($Pricings->Price,2) }}</h4>
                    <p class="text-end">/1 Month</p>
                    <p class="mb-0 fw-semibold text-center">{{ $Pricings->Describe }}</p>
                    </div>
                </div>
        </div>
    </div>
    <div class="row mx-auto w-75 mt-5 ">
        <div class="col-lg-7">
            <h6 class=" fw-semibold">Detail</h6>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class=" mb-1 text-secondary">Type</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="mb-1">{{ $Pricings->Title }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-1 text-secondary">Start Date</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="mb-1">{{ today()->format('j F Y') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-1 text-secondary">Expired till date</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="mb-1">{{ today()->addDays(30)->format('j F Y') }}</p>
                </div>
            </div>
            <h6 class=" fw-semibold mt-3">Detail Payment</h6>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-1 text-secondary">Cost</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="mb-1">{{ number_format($Pricings->Price,2) }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-1 text-secondary">Tax 2.5%</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="mb-1">{{ number_format($Pricings->Price*0.025,2) }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-1 text-secondary">Total Cost</p>
                </div>
                <div class="col-lg-6 text-end">
                    <p class="mb-1">{{ number_format($Pricings->Price*1.025,2) }}</p>
                </div>
            </div>
           
        </div>
        <div class="col-lg text-center px-4">
            <form action="{{ route('DonePayment') }}" method="Post">
                @csrf
            <h6 class=" fw-semibold">Choose Your Payment Method</h6>
            <div class="row text-center d-flex justify-content-center">
                <input type="hidden" name="id" value="{{ $Pricings->id }}">
                <div class="col-5 p-0">
                     <img class="img-thumbnail" src="{{ asset('storage/img/asset/mastercard-2.svg') }}" >
                     <div class="mx-auto mt-0">
                        <input class="form-check-input border-success" type="radio" name="MethodPayment" id="exampleRadios1" value="Mastercard">
                    </div>
                </div>
                <div class="col-5 p-0">
                    <img class="img-thumbnail" src="{{ asset('storage/img/asset/mastercard-circus.svg') }}" >
                    <div class="mx-auto mt-0">
                        <input class="form-check-input border-success" type="radio" name="MethodPayment" id="exampleRadios4" value="Mastercard Circus">
                    </div>
               </div>
               <div class="col-5 p-0">
                <img class="img-thumbnail" style="width: 70px" src="{{ asset('storage/img/asset/visa.svg') }}" >
                    <div class="mx-auto mt-0">
                        <input class="form-check-input border-success" type="radio" name="MethodPayment" id="exampleRadios3" value="Visa">
                    </div>
                </div>
                <div class="col-5 p-0 ">
                    <img class="img-thumbnail" style="width: 70px;"  src="{{ asset('storage/img/asset/paypal.png') }}">
                    <div class="mx-auto mt-0">
                        <input class="form-check-input border-success" type="radio" name="MethodPayment" id="exampleRadios4" value="Paypal">
                    </div>
            </div>
            </div>
            <button type="submit" class=" btn w-75 px-5 mt-2  py-1 btn-success text-capitalize rounded-pill">Pay Now</button>
            
            </form>
        </div>
    </div>
    
</div>
@endsection
