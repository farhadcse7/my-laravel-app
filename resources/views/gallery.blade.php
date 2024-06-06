@extends('master')

@section('body')
    <!--Gallery-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('/')}}img/gallery/gallery (1).jpg" alt="">
                        <div class="card-img-overlay px-0 pb-0">
                            <h3 class="bg-dark text-white position-absolute bottom-0 w-100 mb-0 bg-opacity-75 text-center py-3">
                                Gallery 01</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('/')}}img/gallery/gallery (2).jpg" alt="">
                        <div class="card-img-overlay px-0 pb-0">
                            <h3 class="bg-dark text-white position-absolute bottom-0 w-100 mb-0 bg-opacity-75 text-center py-3">
                                Gallery 02</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery end-->
@endsection
