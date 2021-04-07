@extends('layouts.app')

@section('bg-color', '#f0f0f0')

@section('content')
    
<section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #f0f0f0">

    <div class="mx-auto text-center justify-content-center pb-5">
        <h1 class="title-text-big-header-4-3">UI Kits</h1>
        <h3><span class="badge bg-light text-primary">10 Assets</span></h3>
    </div>

</section>

<section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #ffffff">

    <div class="container-fluid justify-content-center pt-5 px-4">
      <div class="row align-items-start">

        @foreach ($aset as $data)
            
        <div class="col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/aset_desain/ui_kits/' . $data->thumbnail ) }}" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $data->judul }}</h5>
                    
                    <div class="d-inline d-lg-flex align-items-center">
                        <h6 class="align-middle">{{ $data->kategori }}</h6>

                        @if ($data->status == "Free for you") 
                        <h5 class="ms-auto"><span class="badge p-2" style="background-color: #00D058">{{ $data->status }}</span></h5>
                        @elseif ($data->status == "For member")
                        <h5 class="ms-auto"><span class="badge p-2" style="background-color: #3c40c6">{{ $data->status }}</span></h5>
                        @elseif ($data->status == "Special Edition")
                        <h5 class="ms-auto"><span class="badge p-2" style="background-color: #1e272e">{{ $data->status }}</span></h5>
                        @endif
                    </div>
                </div>
            </div>  
        </div>

        @endforeach


        

      </div>
    </div>

</section>



@endsection