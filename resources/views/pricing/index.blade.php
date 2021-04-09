@extends('layouts.app')

{{-- NAVBAR COLOR --}}
@section('bg-color', '#f0f0f0')

@section('content')
    
<section style="height: 100%; width: 100%; box-sizing: border-box; background-color: @yield('bg-color')">
    <div class="main-content-3-8 overflow-hidden" style="font-family: 'Poppins', sans-serif;">
      <div class="container mx-auto">

        <div class="d-flex flex-wrap">

            <div class="mx-auto card-content-3-8">
              <div class="card-outline-content-3-8 d-flex flex-column position-relative overflow-hidden h-100">
                <h2 class="price-title-content-3-8">Startup</h2>
                <h2 class="price-value-content-3-8 d-flex align-items-center">
                  <span>$29</span>
                  <span class="price-duration-content-3-8">/Month</span>
                </h2>
                <p class="price-caption-content-3-8">Suitable for those of you<br>
                  who are beginners</p>
                <div class="price-list-content-3-8">
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Chat Support
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Optimize Projects
                  </p>
                  <p class="d-flex align-items-center no-check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-5.png" alt="">
                    </span>300+ Unique Project
                  </p>
                  <p class="d-flex align-items-center no-check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-5.png" alt="">
                    </span>Own Analytics Platform
                  </p>
                  <p class="d-flex align-items-center no-check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-5.png" alt="">
                    </span>Unlimited User
                  </p>
                </div>
                <button class="btn btn-outline-content-3-8 d-flex justify-content-center align-items-center w-100">Choose Plan</button>
              </div>
            </div>
            <div class="mx-auto card-content-3-8">
              <div class="card-outline-content-3-8 d-flex flex-column position-relative overflow-hidden h-100">
                <h2 class="price-title-content-3-8">Steady</h2>
                <h2 class="price-value-content-3-8 d-flex align-items-center">
                  <span>$49</span>
                  <span class="price-duration-content-3-8">/Month</span>
                </h2>
                <p class="price-caption-content-3-8">Suitable for those of you<br>
                  who want to grow</p>
                <div class="price-list-content-3-8">
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Chat Support
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Optimize Projects
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>300+ Unique Project
                  </p>
                  <p class="d-flex align-items-center no-check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-5.png" alt="">
                    </span>Own Analytics Platform
                  </p>
                  <p class="d-flex align-items-center no-check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-5.png" alt="">
                    </span>Unlimited User
                  </p>
                </div>
                <button class="btn btn-outline-content-3-8 d-flex justify-content-center align-items-center w-100">Choose Plan</button>
              </div>
            </div>
            <div class="mx-auto card-content-3-8">
              <div class="card-outline-content-3-8 d-flex flex-column position-relative overflow-hidden h-100" style="        background-color: #2A2E32;
              ">
                <h2 class="price-title-content-3-8" style="color: #FFFFFF;">Enterprise</h2>
                <h2 class="price-value-content-3-8 d-flex align-items-center">
                  <span>$99</span>
                  <span class="price-duration-content-3-8" style="color: #606370;">/Month</span>
                </h2>
                <p class="price-caption-content-3-8" style="color: #606370;">Suitable to make your<br>
                  company grow rapidly</p>
                <div class="price-list-content-3-8">
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Chat Support
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Optimize Projects
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>300+ Unique Project
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Own Analytics Platform
                  </p>
                  <p class="d-flex align-items-center check-3-8">
                    <span class="span-icon-3-8 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                      <img class="img-fluid" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-2.png" alt="">
                    </span>Unlimited User
                  </p>
                </div>
                <button class="btn btn-fill-content-3-8 d-flex justify-content-center align-items-center w-100">Choose Plan</button>
              </div>
            </div>
          </div>

      </div>
    </div>
</section>

@endsection