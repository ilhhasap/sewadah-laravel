@extends('layouts.app')

{{-- NAVBAR COLOR --}}
@section('bg-color', '#f4f5f6')

@section('content')
    
    <section style="height:100%; width: 100%; box-sizing: border-box;background-color: #f4f5f6" class="banner">
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
          </div>
        </div>

      </div>
    </div>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,64C96,96,192,160,288,154.7C384,149,480,75,576,42.7C672,11,768,21,864,74.7C960,128,1056,224,1152,240C1248,256,1344,192,1392,160L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div> --}}
    </section>

    <section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff" id="showAsset">
      
      

        {{-- <div class="text-center title-text-content-2-1">
          <h1 class="text-title-home">Top Popular</h1>
        </div> --}}

        <div class="container-fluid px-4 mt-5">
          <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">
            <div class="flex-column flex-column-md px-4 py-2 bd-highlight badge-indikator active me-2">Recommended</div>
            <div class="flex-column flex-column-md px-4 py-2 bd-highlight badge-indikator ">Top Popular</div>
            <div class="flex-column flex-column-md px-4 py-2 bd-highlight badge-indikator ms-2">Free for you</div>
          </div>

          <div class="row mt-4">
    
            @foreach ($allAsset as $data)
            <div class="col-lg-6 col-xl-4 col-md-6 col-12 mb-4">
                <div class="card border-0 card-asset">
                    <img src="{{ asset('images/aset_desain/' . $data->thumbnail) }}" class="card-img-top" alt="..." height="300">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">{{ $data->judul }}</h5>
                      <div class="d-flex justify-content-between">
                      <div class="d-inline card-category pt-2">
                        {{ $data->kategori }}
                      </div>
                          <div class="d-inline">
                            @if ($data->status == "Free for you") 
                            <div class="px-4 py-2 rounded-lg badge-free-for-you">{{ $data->status }}</div>
                            @elseif ($data->status == "For Member")
                            <div class="px-4 py-2 rounded-lg badge-for-member">{{ $data->status }}</div>
                            @elseif ($data->status == "Special Edition")
                            <div class="px-4 py-2 rounded-lg badge-special-edition">{{ $data->status }}</div>
                            @endif
                        </div>
                    </div>
                </div>  
            </div>
          </div>
    
            @endforeach
    
    
        </div>
        </div>
    </section>

@endsection