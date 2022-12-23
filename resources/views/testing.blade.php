@extends('layouts.app')

@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid bg-dark p-5">
  <div class="row">
      <div class="col-12 text-center">
          <h1 class="display-4 text-white">Testing</h1>
          <a href="">Home</a>
          <i class="far fa-square text-primary px-2"></i>
          <a href="">About</a>
      </div>
  </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-12">
            <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                {{--start loop --}}
                @foreach($publishers as $key=> $publisher)
                <div class="d-flex text-white mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">
                    {{--   <i class="fa fa-user-tie fs-4"></i>  --}}
                    {{$key+1}}
                    </div>
                    <div class="ps-4">
                        <h3>{{$publisher->name}}</h3>
                        <p class="mb-0">{{$publisher->address}}</p></p>
                    </div>
                </div>
                @endforeach
                {{--end loop--}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->




@endsection
