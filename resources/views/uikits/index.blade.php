@extends('layouts.app')

{{-- NAVBAR COLOR --}}
@section('bg-color', '#f4f5f6') 

@section('content')
    
<section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #f4f5f6">

    <div class="mx-auto text-center justify-content-center pt-3 pb-5">
        <h1 class="title-text-big-header-4-3">UI Kits</h1>
        <h3><span class="badge bg-light text-primary">10 Assets</span></h3>
    </div>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L34.3,96C68.6,96,137,96,206,128C274.3,160,343,224,411,240C480,256,549,224,617,186.7C685.7,149,754,107,823,112C891.4,117,960,171,1029,202.7C1097.1,235,1166,245,1234,213.3C1302.9,181,1371,107,1406,69.3L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> --}}
</section>

<section style="height: 100%; width: 100%; box-sizing: border-box; background-color: #fffffff">

    <div class="container-fluid justify-content-center pt-5 px-4">
      <div class="row align-items-start">

        @foreach ($aset as $data)
        <div class="col-lg-6 col-xl-4 col-md-6 col-12 mb-4">
            <div class="card border-0 card-asset">
                <img src="{{ asset('images/aset_desain/' . $data->thumbnail) }}" class="card-img-top" alt="..." height="300">
                <div class="card-body">
                  <h5 class="card-title fw-bold">{{ $data->judul }}</h5>
                  <div class="d-flex justify-content-between">
                  <div class="d-inline">
                    <p class="card-category">{{ $data->kategori }}</p>
                  </div>
                      <div class="d-inline">
                        @if ($data->status == "Free for you") 
                        <h5 class=""><span class="badge p-2 badge-free-for-you">{{ $data->status }}</span></h5>
                        @elseif ($data->status == "For Member")
                        <h5 class="ms-auto"><span class="badge p-2 badge-for-member">{{ $data->status }}</span></h5>
                        @elseif ($data->status == "Special Edition")
                        <h5 class="ms-auto"><span class="badge p-2 badge-special-edition"><span class="p-1 ic_lock"><img src="{{ asset('images/icons/ic_lock.svg') }}" alt="" width="15"></span>{{ $data->status }}</span></h5>
                        @endif
                    </div>
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