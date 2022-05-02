@extends('front.app')

@push('header-scripts')
    <script>
        $(document).ready(function () {
            $('.item_add').click(function (event) {
                event.preventDefault()
                add()
            })
        })

        function add() {

            //get all price
            let total_price = parseInt($('.simpleCart_total').text());
            let price = parseInt($('.item_price_p').text());
            let new_total_price = price + total_price;
            $('.simpleCart_total').text(new_total_price);

            $.ajax({
                url: "{{ route('cart.add')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: {{ $product->id }},
                    // quantity: qty,
                },

                success: (data) => {
                    // console.log(data)
                },
                error: (data) => {
                    // console.log(data)
                }
            });
        }
    </script>

@endpush

@section('content')
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{ asset('storage/' . $product->image) }}">
                                        <div class="thumb-image"><img src="{{ asset('storage/' . $product->image) }}"
                                                                      data-imagezoom="true" class="img-responsive"
                                                                      alt=""/></div>
                                    </li>
                                    <li data-thumb="images/s-2.jpg">
                                        <div class="thumb-image"><img src="images/s-2.jpg" data-imagezoom="true"
                                                                      class="img-responsive" alt=""/></div>
                                    </li>
                                    <li data-thumb="images/s-3.jpg">
                                        <div class="thumb-image"><img src="images/s-3.jpg" data-imagezoom="true"
                                                                      class="img-responsive" alt=""/></div>
                                    </li>
                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="{{ asset("/front/js/theme/imagezoom.js") }}"></script>
                            <script defer src="{{ asset("/front/js/theme/jquery.flexslider.js") }}"></script>
                            <link rel="stylesheet" href="{{ asset('/front/css/theme/flexslider.css') }}" type="text/css"
                                  media="screen"/>
                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function () {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-7 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{ $product->name }}</h2>
                                <div class="star-on">
                                    <ul class="star-footer">
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#"> 1 customer review </a>

                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h5 class="item_price_p">
                                    {{$product->price}}</h5>
                                <p>{{ Str::limit($product->description,60) }}</p>
                                <div class="available">
                                    <ul>
                                        <li>Color
                                            <select>
                                                <option>Silver</option>
                                                <option>Black</option>
                                                <option>Dark Black</option>
                                                <option>Red</option>
                                            </select></li>
                                        <li class="size-in">Size<select>
                                                <option>Large</option>
                                                <option>Medium</option>
                                                <option>small</option>
                                                <option>Large</option>
                                                <option>small</option>
                                            </select></li>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                                <ul class="tag-men">
                                    <li><span>TAG</span>
                                        <span class="women1">: Women,</span></li>
                                    <li><span>SKU</span>
                                        <span class="women1">: CK09</span></li>
                                </ul>
                                @auth()
                                    <a href="#" class="add-cart item_add">ADD TO CART</a>
                                @else
                                    <a href="{{ route('login') }}" class="add-cart">Log in to purchase</a>
                                @endauth

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tabs">
                        <ul class="menu_drop">
                            <li class="item1"><a href="#"><img src="{{ asset('storage/' .'arrow.png')}}" alt="">Description</a>
                                <ul>
                                    <li class="subitem1"><a href="#">{{ $product->description }}</a></li>
                                </ul>
                            </li>
                            <li class="item2"><a href="#"><img src="{{ asset('storage/' .'arrow.png')}}" alt="">Additional
                                    information</a>
                                <ul>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item3"><a href="#"><img src="{{ asset('storage/' .'arrow.png')}}" alt="">Reviews
                                    (10)</a>
                                <ul>
                                    <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.</a></li>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item4"><a href="#"><img src="{{ asset('storage/' .'arrow.png')}}" alt="">Helpful
                                    Links</a>
                                <ul>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                            <li class="item5"><a href="#"><img src="{{ asset('storage/' .'arrow.png')}}" alt="">Make A
                                    Gift</a>
                                <ul>
                                    <li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.</a></li>
                                    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            praesent luptatum zzril delenit augue duis dolore</a></li>
                                    <li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc
                                            putamus parum claram, anteposuerit litterarum formas humanitatis per seacula
                                            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                            parum clari, fiant sollemnes </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="latestproducts">
                        <div class="product-one">
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                                                            src="images/p-1.png" alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                                                            src="images/p-2.png" alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                                                            src="images/p-3.png" alt=""/></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">$ 329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 single-right">
                    <div class="w_sidebar">
                        <section class="sky-form">
                            <h4>@php(//TODO) @endphp More product with this condition</h4>
                            <div class="row1 scroll-pane">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All
                                        Accessories</label>
                                </div>
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids
                                        Watches</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men
                                        Watches</label>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
