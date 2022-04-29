@extends('front.app')

@section('content')
    <!--prdt-starts-->
    <div class="prdt">
        <div class="container">
            <div class="prdt-top">
                <div class="col-md-9 prdt-left">
                    <div class="product-one">
                        @foreach($products as $product)
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ route('front.product.show', $product->slug) }}" class="mask">
                                        <img class="img-responsive zoom-img"
                                             src="{{ asset('storage/' . $product->image) }}"
                                             alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>{{ $product->name }}</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ {{ $product->price }}</span>
                                        </h4>
                                    </div>
                                    @if($product->discount != 0)
                                        <div class="srch srch1">
                                            <span>- {{ $product->discount }}%</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if( $loop->iteration == 3 )
                                <div class="clearfix"></div>
                            @endif
                        @endforeach
                    </div>
                    {{ $products->links() }}
                </div>
                <div class="col-md-3 prdt-right">
                    <form id="form_filter_operations" class="form-inline" method="get">
                        <div class="w_sidebar">
                            <section class="sky-form">
                                <h4>Catogories</h4>
                                <div class="row1 scroll-pane">
                                    <div class="col col-4">
                                        <label class="checkbox">
                                            <input type="checkbox" name="gender[]" value="female"
                                                   @if(isset($filters['gender']))
                                                   @if(in_array('female',$filters['gender']))
                                                   checked
                                                @endif
                                                @endif
                                            ><i></i>Women Watches</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="gender[]"
                                                   value="male"
                                                   @if(isset($filters['gender']))
                                                   @if(in_array('male',$filters['gender']))
                                                   checked
                                                @endif
                                                @endif
                                            ><i></i>Men Watches</label>
                                        <label class="checkbox">
                                            <input type="checkbox" name="gender[]"
                                                   value="kids"
                                                   @if(isset($filters['gender']))
                                                   @if(in_array('kids',$filters['gender']))
                                                   checked
                                                @endif
                                                @endif
                                            ><i></i>Kids Watches</label>
                                    </div>
                                </div>
                            </section>
                            <section class="sky-form">
                                <h4>Brand</h4>
                                <div class="row1 row2 scroll-pane">
                                    <div class="col col-4">
                                        @foreach($brands as $brand)
                                            <label class="checkbox">
                                                <input type="checkbox" name="brand[]"
                                                       value="{{$brand->id}}"
                                                       @if(isset($filters['brand']))
                                                       @if(in_array($brand->id,$filters['brand']))
                                                       checked
                                                    @endif
                                                    @endif
                                                ><i></i>{{ $brand->name }}
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                            <section class="sky-form">
                                <h4>discount</h4>
                                <div class="row1 row2 scroll-pane">
                                    <div class="col col-4">
                                        <label class="radio"><input type="radio" name="discount" value="60"
                                                                    @if(isset($filters['discount']) && $filters['discount'] == 60)
                                                                    checked
                                                @endif
                                            ><i></i>60 % and
                                            above</label>
                                        <label class="radio"><input type="radio" name="discount" value="50"
                                                                    @if(isset($filters['discount']) && $filters['discount'] == 50)
                                                                    checked
                                                @endif
                                            ><i></i>50 % and
                                            above</label>
                                        <label class="radio"><input type="radio" name="discount" value="40"
                                                                    @if(isset($filters['discount']) && $filters['discount'] == 40)
                                                                    checked
                                                @endif
                                            ><i></i>40 % and
                                            above</label>
                                        <label class="radio"><input type="radio" name="discount" value="30"
                                                                    @if(isset($filters['discount']) && $filters['discount'] == 30)
                                                                    checked
                                                @endif

                                            ><i></i>30 % and
                                            above</label>
                                        <label class="radio"><input type="radio" name="discount" value="20"
                                                                    @if(isset($filters['discount']) && $filters['discount'] == 20)
                                                                    checked
                                                @endif

                                            ><i></i>20 % and
                                            above</label>
                                        <label class="radio"><input type="radio" name="discount" value="10"
                                                                    @if(isset($filters['discount']) && $filters['discount'] == 10)
                                                                    checked
                                                @endif

                                            ><i></i>10 % and
                                            above</label>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-outline mr-2">Filter</button>
                            <a href="{{route('front.product.index')}}" class="btn btn-default btn-outline">Clear</a>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--product-end-->
@endsection
