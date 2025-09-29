@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <h3 class="fw-bold text-capitalize">
                Contact Us
            </h3>
            <p>
                Have a question, special request, or just want to chat about our mouthwatering offerings? We'd love to hear from you!
            </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-5 d-flex justify-content-center align-self-center">
            <img src="{{ asset('storage/img/asset/cta.jpg') }}" style="width:300px; height:300px; " class=" rounded-circle " alt="...">
        </div>
        <div class="col">
            <div class="row py-4 py-lg-0 px-lg-5">
                <div class="col-lg py-1 ">
                    <a href="/register" class=" btn w-100 px-5 py-1 btn-success rounded-pill me-2">
                        Whatsapp
                     </a>
                </div>
                <div class="col-lg py-1">
                    <a href="/register" class=" btn w-100 px-5 py-1 btn-success rounded-pill me-2">
                        Email
                     </a>
                </div>
                <div class="col-lg py-1">
                    <a href="/register" class=" btn w-100 px-5 py-1 btn-success rounded-pill me-2">
                        Telegram
                     </a>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-center mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5595914118703!2d112.7765743736763!3d-7.29084299271661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa469f2b37b5%3A0x8d971ebe4e20a0d5!2sInstitut%20Teknologi%20Adhi%20Tama%20Surabaya!5e0!3m2!1sid!2sid!4v1704894879017!5m2!1sid!2sid" width="550" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
