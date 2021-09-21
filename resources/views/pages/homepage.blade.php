@extends('layout')

@section('pageTitle')
    Homepage
@endsection

@section('content')

    <div class="row">
{{--        headline block--}}
        <div class="col-md-12 col-sm-12">
            <h3 id="canvas-title" class="text-center">Create your own customized canvas print. Whether it’s that glorious
                sunset you saw on your trip, that perfect family picture or the time you spotted a Tiger in the jungle.
            </h3>

{{--            Carousel Block--}}
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-block">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/canvas_img_1.jpg" class="d-block w-100" alt="Canvas Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/canvas_img_2.jpg" class="d-block w-100" alt="Canvas Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/canvas_img_3.jpg" class="d-block w-100" alt="Canvas Image">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                </div>

                </div>

            {{--Product block--}}
                <div id="products-block">
            <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque facilis sit voluptas? Ad eos iste
                            nesciunt nostrum perferendis, sequi. Deleniti enim eveniet, id nam natus neque temporibus
                            veritatis. Necessitatibus, sunt.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque facilis sit voluptas? Ad eos iste
                            nesciunt nostrum perferendis, sequi. Deleniti enim eveniet, id nam natus neque temporibus
                            veritatis. Necessitatibus, sunt.
                        </p>
                    </div>
                </div>
            </div>

    </div>
@endsection
