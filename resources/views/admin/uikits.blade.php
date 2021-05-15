@extends('layouts.admin')



@section('content')
<section id="adminUikits">
<div class="row pl-4 pt-3" style="background-color: #00d058;padding-bottom: 100px">
    <div class="col-lg-12">
        <div class="row mx-2">
            <div class="col-md-6">
        <h1 class="text-title">UI Kits</h1>
        <p class="text-caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dicta molestias</p>
            </div>
    <div class="col-md-6 pt-2 text-right pr-4">
        <button type="button" class="btn btn-light text-primary font-weight-bold mr-2"><i class="fas fa-compress    "></i> All</button>
        <button type="button" class="btn btn-light text-primary font-weight-bold mr-2"><i class="fas fa-plus"></i> New</button>
        <button type="button" class="btn btn-light text-success font-weight-bold mr-2"><i class="fas fa-pen"></i> Update</button>
        <button type="button" class="btn btn-light text-danger font-weight-bold"><i class="fas fa-trash-alt    "></i> Delete</button>
    </div>
    </div>
    </div>
</div>

<div class="row px-3 py-4" style="margin: -80px 30px 0px 30px;z-index: 999; background-color: #fff;border-radius: 15px;">
    @foreach ($joinUikitsAndUser as $data)
            <div class="col-lg-6 col-xl-4 col-md-6 col-12 mb-4">
                <div class="card border-0 card-asset">
                    <img src="{{ asset('images/aset_desain/' . $data->thumbnail) }}" class="card-img-top img-fluid" alt="...">
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

          {{-- <div class="col-lg-12 col-xl-12 col-md-12 col-12">
          <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="5">
                                    <thead>
                                        <tr>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($joinUikitsAndUser as $data)
                                        <tr>
                                            <td>{{ $data->username }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <td>{{ $data->kategori }}</td>
                                            <td>
                                            @if ($data->status == "Free for you")
                                            <span class="badge-free-for-you rounded">{{ $data->status }}</span>
                                            @elseif ($data->status == "Special Edition")
                                            <span class="badge-special-edition rounded">{{ $data->status }}</span>
                                            @elseif ($data->status == "For Member")
                                            <span class="badge-for-member rounded">{{ $data->status }}</span>
                                            @endif
                                            </td>
                                            <td class="text-danger font-weight-bold">Delete</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
</div>

</section>
@endsection