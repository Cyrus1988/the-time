@include('front.layouts.header')
<!--top-info-block-starts-->
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    @include('front.components.currency')
                    @include('front.components.language')
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 top-header-left">
                @include('front.components.account')
            </div>
            <div class="col-md-2 top-header-left">
                @include('front.components.cart')
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
@include('front.components.logo')
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            @include('front.components.menu')
            @include('front.components.search')
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    @include('front.components.breadcrumbs')
</div>
<!--end-breadcrumbs-->
<!--top-info-block-end-->
<!--product-starts-->
@yield('content')
<!--product-end-->
<!--information-starts-->
@include('front.components.bottom')
<!--information-end-->
@include('front.layouts.footer')
