@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-pricing-tab" data-bs-toggle="tab" data-bs-target="#nav-pricing" type="button" role="tab" aria-controls="nav-pricing" aria-selected="true">Pricing Package</button>
          <button class="nav-link" id="nav-menus-tab" data-bs-toggle="tab" data-bs-target="#nav-menus" type="button" role="tab" aria-controls="nav-menus" aria-selected="false">Menus</button>
          <button class="nav-link" id="nav-schedule-tab" data-bs-toggle="tab" data-bs-target="#nav-schedule" type="button" role="tab" aria-controls="nav-schedule" aria-selected="false">Food Schedule</button>
          <button class="nav-link" id="nav-testimonials-tab" data-bs-toggle="tab" data-bs-target="#nav-testimonials" type="button" role="tab" aria-controls="nav-testimonials" aria-selected="false" >Testimonials</button>
          <button class="nav-link" id="nav-customers-tab" data-bs-toggle="tab" data-bs-target="#nav-customers" type="button" role="tab" aria-controls="nav-customers" aria-selected="false" >Customers</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane py-3 fade show active" id="nav-pricing" role="tabpanel" aria-labelledby="nav-pricing-tab" tabindex="0">
          <a href="/Price/create" class=" btn w px-5 py-1 btn-success rounded-pill me-2">
            New Price
         </a>
        <table class="table mt-3">
            <thead>
              <tr class="border">
                <th class="border" scope="col">#</th>
                <th class="border" scope="col">Title</th>
                <th class="border" scope="col">Price</th>
                <th class="border" scope="col">Describe</th>
              </tr>
            </thead>
            @foreach ($Prices as $Price)
            <tbody>
                <tr class="border">
                  <th class="border" scope="row">{{ $loop->iteration }}</th>
                  <td class="border">{{ $Price->Title}}</td>
                  <td class="border">Rp. {{ number_format($Price->Price,2 )}}</td>
                  <td class="border">{{ $Price->Describe }}</td>
                </tr>
              </tbody> 
            @endforeach
          </table>
        </div>
        <div class="tab-pane py-3 fade" id="nav-menus" role="tabpanel" aria-labelledby="nav-menus-tab" tabindex="0">
          <a href="/Menu/create" class=" btn w px-5 py-1 btn-success rounded-pill me-2">
            New Menus
          </a>
          <table class="table mt-3">
            <thead>
              <tr class="border">
                <th class="border" scope="col">#</th>
                <th class="border" scope="col">Menu 1</th>
                <th class="border" scope="col">Menu 2</th>
                <th class="border" scope="col">Menu 3</th>
              </tr>
            </thead>
            @foreach ($Menus as $Menu)
            <tbody>
                <tr class="border">
                  <th class="border" scope="row">{{ $loop->iteration }}</th>
                  <td class="border">{{ $Menu->FoodName1}}</td>
                  <td class="border">{{ $Menu->FoodName2}}</td>
                  <td class="border">{{ $Menu->FoodName3 }}</td>
                </tr>
              </tbody> 
            @endforeach
          </table>
        </div>
        <div class="tab-pane py-3 fade" id="nav-schedule" role="tabpanel" aria-labelledby="nav-schedule-tab" tabindex="0">
          <a href="/FoodSchedule/create" class=" btn w px-5 py-1 btn-success rounded-pill me-2">
            New Food Schedule
          </a>
          <div class="table-responsive">
            <table class="table mt-3">
              <thead>
                <tr class="border">
                  <th class="border" scope="col">#</th>
                  <th class="border" scope="col">User</th>
                  <th class="border" scope="col">Menu Sunday</th>
                  <th class="border" scope="col">Menu Monday</th>
                  <th class="border" scope="col">Menu Tuesday</th>
                  <th class="border" scope="col">Menu Wednesday</th>
                  <th class="border" scope="col">Menu Thusday</th>
                  <th class="border" scope="col">Menu Friday</th>
                  <th class="border" scope="col">Menu Saturday</th>
                </tr>
              </thead>
              @foreach ($FoodSchedules as $FoodSchedule)
              <tbody>
                  <tr class="border">
                    <th class="border" scope="row">{{ $loop->iteration }}</th>
                    <td class="border">{{ $FoodSchedule->User->name}}</td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuSunday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuSunday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuSunday->FoodName3}} <br>
                    </td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuMonday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuMonday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuMonday->FoodName3}} <br>
                    </td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuThusday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuThusday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuThusday->FoodName3}} <br>
                    </td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuWednesday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuWednesday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuWednesday->FoodName3}} <br>
                    </td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuThursday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuThursday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuThursday->FoodName3}} <br>
                    </td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuFriday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuFriday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuFriday->FoodName3}} <br>
                    </td>
                    <td class="border">
                      1. {{ $FoodSchedule->MenuSaturday->FoodName1}} <br>
                      2. {{ $FoodSchedule->MenuSaturday->FoodName2}} <br>
                      3. {{ $FoodSchedule->MenuSaturday->FoodName3}} <br>
                    </td>
                    
                  </tr>
                </tbody> 
              @endforeach
            </table>
          </div>
        </div>
        <div class="tab-pane py-3 fade" id="nav-testimonials" role="tabpanel" aria-labelledby="nav-testimonials-tab" tabindex="0">
          <a href="/Testimonials/create" class=" btn w px-5 py-1 btn-success rounded-pill me-2">
            New Testimonials
          </a>
          <table class="table mt-3">
            <thead>
              <tr class="border">
                <th class="border" scope="col">#</th>
                <th class="border" scope="col">FullName</th>
                <th class="border" scope="col">Job</th>
                <th class="border" scope="col">Tagline</th>
                <th class="border" scope="col">Coment</th>
              </tr>
            </thead>
            @foreach ($Testimonials as $Testimonial)
            <tbody>
                <tr class="border">
                  <th class="border" scope="row">{{ $loop->iteration }}</th>
                  <td class="border">{{ $Testimonial->FullName}}</td>
                  <td class="border">{{ $Testimonial->Job}}</td>
                  <td class="border">{{ $Testimonial->Tagline }}</td>
                  <td class="border">{{ $Testimonial->Coment }}</td>
                </tr>
              </tbody> 
            @endforeach
          </table>
        </div>
        <div class="tab-pane py-3 fade" id="nav-customers" role="tabpanel" aria-labelledby="nav-customers-tab" tabindex="0">
          <table class="table mt-3">
            <thead>
              <tr class="border">
                <th class="border" scope="col">#</th>
                <th class="border" scope="col">FullName</th>
                <th class="border" scope="col">Package</th>
                <th class="border" scope="col">Active</th>
              </tr>
            </thead>
            @foreach ($Customers as $Customer)
            <tbody>
                <tr class="border">
                  <th class="border" scope="row">{{ $loop->iteration }}</th>
                  <td class="border">{{ $Customer->name}}</td>
                  <td class="border">{{ $Customer->Payment->Pricing->Title ?? '-'}}</td>
                  <td class="border">{{ $Customer->Payment->created_at->format('j F Y') ?? ''}} - {{ $Customer->Payment->created_at->addDays(30)->format('j F Y') ?? ''}}</td>
                </tr>
              </tbody> 
            @endforeach
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
