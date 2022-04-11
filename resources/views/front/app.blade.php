@include('front.layouts.header')
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    @include('front.layouts.components.top.currency')
                    @include('front.layouts.components.top.language')
                    <div class="clearfix"></div>
                </div>
            </div>
            @include('front.layouts.components.top.cart')
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
@include('front.layouts.components.top.logo')
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            @include('front.layouts.components.top.menu')
            @include('front.layouts.components.top.search')
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!--product-starts-->
@yield('content')
<!--product-end-->
<!--information-starts-->
@include('front.layouts.components.bottom.info')
<!--information-end-->
@include('front.layouts.footer')
