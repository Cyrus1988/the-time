<div class="col-md-9 header-left">
    <div class="top-nav">
        <ul class="memenu skyblue">
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li class="grid"><a href="#">Men</a>
                <div class="mepanel">
                    <div class="row">
                        <div class="col1 me-one">
                            <h4>Watches</h4>
                            <ul>
                                @foreach($male as $maleProduct)
                                    <li><a href="{{ route('front.brand.show', $maleProduct->brand->slug) }}">{{ $maleProduct->brand->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="grid"><a href="#">Women</a>
                <div class="mepanel">
                    <div class="row">
                        <div class="col1 me-one">
                            <h4>Watches</h4>
                            <ul>
                                @foreach($female as $femaleProduct)
                                    <li><a href="{{ route('front.brand.show', $femaleProduct->brand->slug) }}">{{ $femaleProduct->brand->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="grid"><a href="#">Unisex</a>
                <div class="mepanel">
                    <div class="row">
                        <div class="col1 me-one">
                            <h4>Watches</h4>
                            <ul>
                                <ul>
                                    @foreach($unisex as $unisexProduct)
                                        <li><a href="{{ route('front.brand.show', $unisexProduct->brand->slug) }}">{{ $unisexProduct->brand->name }}</a></li>
                                    @endforeach
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="grid"><a href="typo.html">Blog</a>
            </li>
            <li class="grid"><a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
