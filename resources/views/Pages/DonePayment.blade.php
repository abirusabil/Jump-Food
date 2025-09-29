@extends('layouts.app')

@section('content')
<div class="container ">
    
    <div class="row mx-auto w-75 pt-2">
            <h4 class="fw-semibold text-center text-success text-uppercase">Invoice</h4>
             <hr class="border border-success border-1 mb-3 opacity-100 text-center mb-1">
            <h6 class=" fw-semibold ">Detail</h6>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class=" mb-2 text-secondary">Type</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ $Pricings->Title }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Start Date</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ today()->format('j F Y') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Expired till date</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ today()->addDays(30)->format('j F Y') }}</p>
                </div>
            </div>
            <h6 class=" fw-semibold mt-2">Detail Payment</h6>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Payment method</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ $MethodPayment }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Order number</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ mt_rand(1000000000, 9999999999) }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Payment code</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ number_format(mt_rand(100000000000, 999999999999), 0, ',', '.') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Make payment before</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ today()->addDays(2)->format('j F Y') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Cost</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ number_format($Pricings->Price,2) }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <p class="mb-2 text-secondary">Tax 2.5%</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-2 fw-semibold">{{ number_format($Pricings->Price*0.025,2) }}</p>
                </div>
            </div>
            <hr class="border border-success border-2 opacity-100 text-center mb-1">
            <div class="row ">
                <div class="col-lg-6 ">
                    <p class="mb-0 text-success fw-semibold">Grand Total</p>
                </div>
                <div class="col-lg-6 text-end pe-0">
                    <p class="mb-0  text-success fw-semibold">{{ number_format($Pricings->Price*1.025,2) }}</p>
                </div>
            </div>
            <form action="{{ route('Payment.store') }}" method="Post">
                @csrf
                <input type="hidden" name="PricingId" value="{{ $Pricings->id }}">
                <button type="submit" class="  btn w-100 px-5 mt-3 btn-success text-capitalize rounded-pill">Pay Now</button>
            </form>
    </div>
    
</div>
@endsection
