@extends('front.app')

@push('header-scripts')
    <script src="{{ asset("js/theme/responsiveslides.min.js") }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--End-slider-script-->
@endpush

@section('content')
    <!--banner-starts-->
    @include('front.components.top.slider')
    <!--banner-ends-->
    <!--Slider-Starts-Here-->
    <!--about-starts-->
    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                @foreach($brands as $brand)
                    <div class="col-md-4 about-left">
                        <figure class="effect-bubba">
                            <a href="{{ route('front.brand.show',$brand->slug) }}">
                                <img class="img-responsive" src="{{ asset('storage/brand/' . $brand->image)}}" alt=""/>
                                <figcaption>
                                    <h2>{{ $brand->name }}</h2>
                                    <p>{{ Str::limit($brand->description,60) }}</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--about-end-->

    <div class="product">
        <div class="container">
            <div class="product-top">
                <div class="product-one">
                    @foreach($products as $product)
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{ route('front.product.show',$product->slug) }}" class="mask"><img
                                        class="img-responsive zoom-img"
                                        {{-- src="images/p-1.png"--}}
                                        src="{{ asset('storage/' . $product->image) }}"
                                        alt=""/></a>
                                <div class="product-bottom">
                                    <h3>{{ $product->name }}</h3>
                                    <p>Explore Now</p>
                                    <h4><a class="item_add" href="#"><i></i></a> <span
                                            class=" item_price">$ {{ $product->price - ($product->price * $product->discount / 100) }}</span>
                                    </h4>
                                </div>
                                <div class="srch">
                                    <span>- {{ $product->discount }}%</span>
                                </div>
                            </div>
                        </div>
                        @if( $loop->iteration == 4 )
                            <div class="clearfix"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
