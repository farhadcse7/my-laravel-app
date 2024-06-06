@extends('master')

@section('body')
    <!--Slider start-->
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}img/slider/slider (1).jpg" alt="" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>Slider Title 1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque dolore ex facilis laboriosam
                        sapiente!</p>
                    <a href="" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{asset('/')}}img/slider/slider (2).jpg" alt="" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>Slider Title 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque dolore ex facilis laboriosam
                        sapiente!</p>
                    <a href="" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{asset('/')}}img/slider/slider (3).jpg" alt="" class="w-100" height="550">
                <div class="carousel-caption">
                    <h1>Slider Title 3</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque dolore ex facilis laboriosam
                        sapiente!</p>
                    <a href="" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>

        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>

        </a>
    </div>
    <!--Slider end-->




    <!--Features-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body rounded-0">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            consequatur deserunt dolor esse ipsum natus odit qui quod vero.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body rounded-0">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            consequatur deserunt dolor esse ipsum natus odit qui quod vero.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body rounded-0">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            consequatur deserunt dolor esse ipsum natus odit qui quod vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Features end-->


    <!--Blog-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}img/blog/blog (1).jpg">
                        <div class="card-body">
                            <h3>Blog title 01</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum eligendi nulla
                                numquam, obcaecati praesentium sint. Atque error eum laboriosam.</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}img/blog/blog (2).jpg">
                        <div class="card-body">
                            <h3>Blog title 02</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum eligendi nulla
                                numquam, obcaecati praesentium sint. Atque error eum laboriosam.</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}img/blog/blog (3).jpg">
                        <div class="card-body">
                            <h3>Blog title 03</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus earum eligendi nulla
                                numquam, obcaecati praesentium sint. Atque error eum laboriosam.</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog end-->


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

    <!--news-->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('/')}}img/news/news (1).jpg" alt="" class="w-100 h-100">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque dicta
                                        distinctio ex minima mollitia, obcaecati odio sit tenetur voluptatem.</p>
                                    <hr/>
                                    <a href="" class="btn btn-success float-end mb-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('/')}}img/news/news (2).jpg" alt="" class="w-100 h-100">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid atque dicta
                                        distinctio ex minima mollitia, obcaecati odio sit tenetur voluptatem.</p>
                                    <hr/>
                                    <a href="" class="btn btn-success float-end mb-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--news end-->

    <!--article-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Article title 01</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur cum cupiditate
                                dignissimos distinctio dolore eveniet illum in quaerat quasi quidem ratione repudiandae
                                rerum sit tempora velit veritatis voluptate, voluptatibus!</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Article title 02</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur cum cupiditate
                                dignissimos distinctio dolore eveniet illum in quaerat quasi quidem ratione repudiandae
                                rerum sit tempora velit veritatis voluptate, voluptatibus!</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Article title 03</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur cum cupiditate
                                dignissimos distinctio dolore eveniet illum in quaerat quasi quidem ratione repudiandae
                                rerum sit tempora velit veritatis voluptate, voluptatibus!</p>
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--article end-->

@endsection
