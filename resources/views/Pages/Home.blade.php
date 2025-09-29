@extends('layouts.app')

@section('content')
<div class="container me-0 ps-lg-0  ">
    <div class="row phy-5">
        <div class="col-lg-5 align-self-center ps-lg-0 justify-content-center align-items-center px-3 px-lg-0" >
            <p class="bg-body-secondary w-75 rounded-pill text-black "><span class="bg-success px-4 text-white rounded-pill me-2 py-1">New</span >Smartband feature updated</p>
            <h1 class="mt-lg-5 mt-4 "><b>Choose Your Food.</b></h1>
            <h3 class="mb-lg-5 mb-4 header-3 fw-lighter">Be Healthy Be Happy</h3>
            <div class="d-flex">
                <div style="width: 33px; height: 33px; background: #009432; border-radius: 7px">
                    <div style="width: 100%; height: 100%; position: relative">
                        <div style="width: 32px; height: 32px; left: 0px; top: 0px; position: absolute; background: #009432; border-radius: 7px"></div>
                        <div style="width: 14px; height: 14px; left: 9px; top: 9px; position: absolute; background: #CCDFFF; border-radius: 9999px"></div>
                    </div>
                </div>
                <div class="ms-2">
                    <h5 class="mb-0 fw-bold">Free consultation</h5>
                    <p>Whenever you want</p>
                </div>
            </div>
            <div class="d-flex mt-lg-5 mt-3 my-2 mb-lg-0 justify-content-lg-start justify-content-center">
                <a href="/register" class=" btn px-5 py-1 btn-success rounded-pill me-2">
                   sign up
                </a>
                <a href="/Contact" class=" btn px-5 py-1 bg-body-secondary rounded-pill">
                    consultation
                </a>
            </div>
        </div>
        <div class="col-lg-7 d-flex justify-content-lg-end justify-content-center mt-4 mt-lg-0 p-lg-0 p-1 d-flex align-items-center">
            <img class="TN-1 rounded-4 me-lg-5 " src="{{ asset('storage/img/asset/1705810276_Sushi Bowl with Tuna.jpg') }}">
            <img class="TN-2 rounded-start-4 d-lg-flex d-none" src="{{ asset('storage/img/asset/1705810276_Caprese Wrap with Chicken Caesar.jpg') }}" >
            {{-- Uncomment the line below if you want to use a different image for larger screens --}}
            {{-- <img class="TN-2 rounded-start-4 d-lg-flex d-none" src="{{ asset('storage/img/asset/img3.jpg') }}" > --}}
        </div>
    </div>
</div>
<section class="background-1">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg d-flex justify-content-lg-end justify-content-center mb-3  me-1 me-lg-3">
                <img class="TN-3 rounded-4" src="{{ asset('storage/img/asset/1705931456_Caesar salad with chicken fillet.jpg') }}" >
            </div>
            <div class="col-lg ms-lg-4 ">
                <h4 class="text-white fw-bold w-75">
                    Elevate Your Dining Experience with Jump-Food Catering !
                </h4>
                <p class="text-white  mt-4  w-75" style="text-align: justify;">
                    Welcome to Jump-Food Catering, where culinary innovation meets convenience. Explore a world of healthy and delectable menus tailored to your taste buds. Our user-friendly website ensures a seamless ordering experience, from personalized consultations to nutritional insights. Immerse yourself in a culinary journey that goes beyond delicious meals. With a mission to combat child stunting, every order contributes to meaningful social impact. Join us in creating memorable moments and making a difference Ready to savor the extraordinary? Dive into Jump-Food Catering and redefine your dining adventure!
                </p>
            </div>
        </div>
        <div class="row mt-3 mx-lg-5 px-lg-5">
            <div class="col-lg">
                <div class="d-flex justify-content-center align-items-center w-100 text-center" >
                    <div class="rounded-circle bg-white d-flex justify-content-center align-items-center" style="width: 100px; height: 100px;">
                     <img class="img-cover w-75" src="{{ asset('storage/img/asset/Vector-1.png') }}" >
                     </div>
                </div>
                <h5 class="text-center text-capitalize mt-3 mb-1 fw-bold text-white">health knowledge</h5>
                <p class="text-center text-white">Enhance your well-being with a wealth of health knowledge at your fingertips</p>
            </div>
            <div class="col-lg">
                <div class="d-flex justify-content-center align-items-center w-100 text-center" >
                    <div class="rounded-circle bg-white d-flex justify-content-center align-items-center" style="width: 100px; height: 100px;">
                     <img class="img-cover w-50" src="{{ asset('storage/img/asset/Vector.png') }}" >
                     </div>
                </div>
                <h5 class="text-center text-capitalize mt-3 mb-1 fw-bold text-white">healthy food</h5>
                <p class="text-center text-white">Elevate your culinary experience while nourishing your body with nutritious ingredients.</p>
            </div>
            <div class="col-lg">
                <div class="d-flex justify-content-center align-items-center w-100 text-center" >
                    <div class="rounded-circle bg-white d-flex justify-content-center align-items-center" style="width: 100px; height: 100px;">
                     <img class="img-cover w-75" src="{{ asset('storage/img/asset/Vector-2.png') }}" >
                     </div>
                </div>
                <h5 class="text-center text-capitalize mt-3 mb-1 fw-bold text-white">nutritional control</h5>
                <p class="text-center text-white">Manage your nutritional intake, ensuring a balanced and healthy approach to fueling your body.</p>
            </div>
        </div>
    </div>
</section>
<div class="container d-flex justify-content-center my-lg-5 my-3">
    <div class="card w-100 mx-lg-5 px-lg-5 py-lg-2 card-packages">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4 align-self-center text-center text-lg-start text-capitalize">
                <h3 class="fw-bold mb-lg-0 ">
                    We offer several packages
                </h3>
            </div>
            <div class="col align-self-lg-center ">
                <div class="row">
                    <div class="col-lg-3 align-self-center d-flex justify-content-center p-lg-0">
                        <div class="d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; background: #E9ECF2; border-radius: 5px">
                           <img class="img-cover w-75" src="{{ asset('storage/img/asset/frame.png') }}" >
                        </div>
                    </div>
                    <div class="col align-self-center ps-lg-2">
                        <p class="mb-0 text-capitalize text-center text-lg-start">sport nutrition food</p>
                    </div>
                </div>
            </div>
            <div class="col align-self-lg-center ">
                <div class="row">
                    <div class="col-lg-3 align-self-lg-center d-flex justify-content-center p-lg-0">
                        <div class="d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; background: #E9ECF2; border-radius: 5px">
                            <img class="img-cover w-75" src="{{ asset('storage/img/asset/frame-2.png') }}" >
                        </div>
                    </div>
                    <div class="col align-self-center ps-lg-2">
                        <p class="mb-0 text-capitalize text-center text-lg-start">Balance food</p>
                    </div>
                </div>
            </div>
            <div class="col align-self-lg-center ">
                <div class="row">
                    <div class="col-lg-3 align-self-lg-center d-flex justify-content-center p-lg-0">
                        <div class="d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; background: #E9ECF2; border-radius: 5px">
                            <img class="img-cover w-75" src="{{ asset('storage/img/asset/frame-3.png') }}" >
                        </div>
                    </div>
                    <div class="col align-self-center ps-lg-2">
                        <p class="mb-0 text-capitalize text-center text-lg-start">low calorie food</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="container  my-3 py-4 py-lg-4 ">
    <h6 class="text-uppercase text-body-secondary mb-0 fw-light" >Testimonials</h6>
    <h3 class="fw-bold text-capitalize">
        Check what our <br> clients are saying
    </h3>
    <div id="carouselExample" class="carousel slide ">
        <div class="row">
            <div class="col">
                <div class="carousel-inner">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($Testimonials as $Testimonial)
                    @php
                        $i++;
                    @endphp
                        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">

                            <div class="row mt-4">
                                <div class="col-lg-5 h-75 align-self-lg-center " >
                                    <img class="TN-4 rounded-4 img-fluid " src="{{ asset('storage/img/asset/' . ($Testimonial->Picture ?? 'default.jpg')) }}"  >
                                </div>
                                <div class="col-lg mx-lg-5 align-self-lg-center mt-3 mt-lg-0">
                                    <i class="fa-solid fa-quote-left mb-lg-2"></i>
                                    <h5 class="fw-bold">
                                        {{ $Testimonial->Tagline }}
                                    </h5>
                                    <div class="comment">
                                        <p class=" pt-lg-3 " >
                                            {{ $Testimonial->Coment }}
                                        </p>
                                    </div>
                                    <h6 class="fw-bold mb-0">{{ $Testimonial->FullName }}</h6>
                                    <p class="mb-0">{{ $Testimonial->Job }}</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col d-flex justify-content-lg-start justify-content-center">

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col">
                <div class="btn-carousel d-flex w-50">
                    <button class="carousel-control-prev me-2" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <i class="fa-solid fa-arrow-left bt1 w-100"></i>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                       <i class="fa-solid fa-arrow-right bt1 w-100"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="container py-4">
    <div class="row">
        <div class="col">
            <h3 class="fw-bold text-capitalize text-center">
                Frequently Asked Questions
            </h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="accordion" id="accordionExample">
                {{--  --}}
                <div class="accordion-item border-0">
                  <h5 class="accordion-header  border-0">
                    <button class="accordion-button py-2 px-3 bg-dark-subtle text-dark rounded-1  border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How can I place an order with Jump-Food Catering?
                    </button>
                  </h5>
                  <div id="collapseOne" class="accordion-collapse collapse show  border-none" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-3  border-0 ">
                     <p class="mb-0  border-0">
                        You can easily place an order through our website on your gadget. Select from a variety of menus tailored to your preferences and needs. Follow the online process for consultation, ordering, and the calculation of nutritional needs and calories.
                     </p>
                    </div>
                  </div>
                </div>
                {{--  --}}
                <div class="accordion-item mt-3 border-0">
                    <h5 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-3 bg-dark-subtle text-dark rounded-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What sets Jump-Food Catering apart from other catering services?
                        </button>
                    </h5>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-3 ">
                            <p class="mb-0">
                                You can easily place an order through our website on your gadget. Select from a variety of menus tailored to your preferences and needs. Follow the online process for consultation, ordering, and the calculation of nutritional needs and calories.
                            </p>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="accordion-item mt-3 border-0">
                    <h5 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-3 bg-dark-subtle text-dark rounded-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Can I customize the menu based on my dietary preferences and requirements?
                        </button>
                    </h5>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-3 ">
                            <p class="mb-0">
                                You can easily place an order through our website on your gadget. Select from a variety of menus tailored to your preferences and needs. Follow the online process for consultation, ordering, and the calculation of nutritional needs and calories.
                            </p>
                        </div>
                    </div>
                </div>
                  <div class="accordion-item mt-3 border-0">
                    <h5 class="accordion-header ">
                      <button class="accordion-button collapsed py-2 px-3 bg-dark-subtle text-dark rounded-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                Does Jump-Food Catering offer specialized menu options for specific nutritional needs?
                      </button>
                    </h5>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-3 ">
                            <p class="mb-0">
                                You can easily place an order through our website on your gadget. Select from a variety of menus tailored to your preferences and needs. Follow the online process for consultation, ordering, and the calculation of nutritional needs and calories.
                            </p>
                        </div>
                    </div>
                  </div>
              </div>

        </div>
    </div>

</div>
<div class="container d-flex justify-content-center my-3 my-lg-0 py-lg-5">
    <div class="card w-100 mx-lg-5 px-lg-5 py-lg-4 card-packages">
        <div class="card-body">
          <div class="row px-lg-5" >
            <div class="col-lg-9 align-self-center text-center text-lg-start text-capitalize">
                <h3 class="fw-bold mb-lg-0 ">
                    contact us for further questions
                </h3>
            </div>
            <div class="col align-self-lg-center d-flex justify-content-center justify-content-lg-start">
                <a href="/contact" class=" btn px-5  py-1 btn-success rounded-pill me-2">
                    Contact Us
                 </a>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
