<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    @include('front.components.top.currency')
                    @include('front.components.top.language')
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 top-header-left">
                @include('front.components.top.account')
            </div>
            <div class="col-md-2 top-header-left">
                @include('front.components.top.cart')
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
@include('front.components.top.logo')
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            @include('front.components.top.menu')
            @include('front.components.top.search')
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    @include('front.components.top.breadcrumbs')
</div>
<!--end-breadcrumbs-->
