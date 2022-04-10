<!--banner-starts-->
@include('front.layouts.components.top.slider')
<!--banner-ends-->
<!--Slider-Starts-Here-->
<script src="/js/responsiveslides.min.js"></script>
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
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/abt-1.jpg" alt=""/>
                    <figcaption>
                        <h2>Nulla maximus nunc</h2>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/abt-2.jpg" alt=""/>
                    <figcaption>
                        <h4>Mauris erat augue</h4>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/abt-3.jpg" alt=""/>
                    <figcaption>
                        <h4>Cras elit mauris</h4>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--about-end-->
