@extends('front.app')

@section('content')
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-12 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <div class="flexslider">
                                <div><img src="{{ asset('storage/brand/' . $brand->image) }}" alt=""/></div>
                            </div>
                        </div>
                        <div class="col-md-7 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{ $brand->name }}</h2>
                                <p>{{ $brand->description }}</p>
                                <p>Total products of this brand: <b>{{ $productCount}}</b></p>
                                <a href="#" class="add-cart item_add">VIEW PRODUCTS</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="latestproducts">
                        <div class="product-one">
                            @foreach($topProducts as $product)
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ route('front.product.show', $product->slug) }}" class="mask"><img class="img-responsive zoom-img"
                                                                            src="{{ asset('storage/' . $product->image) }}" alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>{{ $product->name }}</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ {{ $product->price - ($product->price * $product->discount / 100) }}</span></h4>
                                    </div>
                                    @if($product->discount != 0)
                                        <div class="srch">
                                            <span>- {{ $product->discount }}%</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
