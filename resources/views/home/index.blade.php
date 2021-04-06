@extends('layouts.app')

@section('bg-color', '#ffffff')

@section('content')
    
    <section style="height:100%; width: 100%; box-sizing: border-box; background-color: #fdfdfd" class="banner">

    <div>
      <div class="mx-auto d-flex flex-lg-row flex-column hero-header-4-3">
        <!-- Left Column -->
        <div class="left-column-header-4-3 d-flex flex-lg-grow-1 flex-column align-items-lg-center text-lg-center align-items-center text-center">
          {{-- <p class="text-caption-header-4-3">FREE 30 DAY TRIAL</p> --}}
          <h1 class="title-text-big-header-4-3">Get design<br>
        assets quickly.</h1>
        <p class="description-title-text">
        A package of design assets ready <br> to use in your project
        </p>
          <div class="div-button-header-4-3 d-inline d-lg-flex align-items-center mx-lg-0 mx-auto justify-content-center">
            <button class="btn d-inline-flex mb-md-0 btn-get-it-now justify-content-center">Get it now</button>
            {{-- <button class="btn btn-outline-header-4-3">                  
              <div class="d-flex align-items-center">
              <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.9293 8L6.66668 5.158V10.842L10.9293 8ZM12.9173 8.27734L5.85134 12.988C5.80115 13.0214 5.74283 13.0406 5.6826 13.0435C5.62238 13.0463 5.5625 13.0328 5.50934 13.0044C5.45619 12.9759 5.41175 12.9336 5.38075 12.8818C5.34976 12.8301 5.33337 12.771 5.33334 12.7107V3.28934C5.33337 3.22904 5.34976 3.16989 5.38075 3.11817C5.41175 3.06645 5.45619 3.0241 5.50934 2.99564C5.5625 2.96719 5.62238 2.95368 5.6826 2.95656C5.74283 2.95944 5.80115 2.9786 5.85134 3.012L12.9173 7.72267C12.963 7.75311 13.0004 7.79435 13.0263 7.84273C13.0522 7.89111 13.0658 7.94513 13.0658 8C13.0658 8.05488 13.0522 8.1089 13.0263 8.15728C13.0004 8.20566 12.963 8.2469 12.9173 8.27734Z" fill="#707092"/>
              </svg>                                      
              Watch the video
              </div>
            </button> --}}
          </div>
        </div>
        <!-- Right Column -->
        {{-- <div class="right-column-header-4-3 text-center d-flex justify-content-lg-end justify-content-center pe-0">
          <img id="img-fluid" style="display: block;max-width: 100%;height: auto;" src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header4/Header-4-3.png" alt="">
        </div> --}}

      </div>
    </div>
    </div>
    
    </section>

    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">
      
      

        <div class="text-center title-text-content-2-1">
          <h1 class="text-title-content-2-1">Top Popular</h1>
          <p class="text-caption-content-2-1" style="  margin-left: 3rem; margin-right: 3rem;">You can easily manage your business with a powerful tools</p>
        </div>

<div class="container">
        <div class="list-content justify-content-center ">
          <div class="row">

            @foreach($user as $data)
            <div class="col-lg-4 column-content-2-1">
              <div class="card">
                <img src="{{ asset('images/banner_left.png') }}" class="card-img-top" alt="..." width="150" height="300">
                <div class="card-body">
                  <h5 class="card-title">{{  $data->username }}</h5>

                  <div class="d-inline d-lg-flex align-items-center">
                      <h6 class="align-middle">Illustration</h6>
                      <h4 class="ms-auto"><span class="badge bg-primary ">Free for you</span></h4>
                  </div>
                </div>
              </div>           
            </div>
            @endforeach

            
            </div>

          </div>
        </div>

    </section>

@endsection