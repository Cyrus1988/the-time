@extends('front.app')

@section('content')
    <div class="ckeckout">
        <div class="container">
            @if($items->count() != 0)
                <div class="ckeck-top heading">
                    <h2>Your cart</h2>
                </div>
                <div class="ckeckout-top">
                    <div class="cart-items">
                        <h3>My Shopping Bag ({{ $items->count() }})</h3>
                        <div class="in-check">
                            <ul class="unit">
                                <li><span>Item</span></li>
                                <li><span>Product Name</span></li>
                                <li><span>Unit Price</span></li>
                                <li><span>Unit Count</span></li>
                                <li></li>
                                <div class="clearfix"></div>
                            </ul>
                            @foreach($items as $item)
                                <ul class="cart-header">
                                    <div class="close1"></div>
                                    <li class="ring-in"><a
                                            href="{{ route('front.product.show', $item->attributes->slug) }}"><img
                                                src="{{ asset('storage/' . $item->attributes->image) }}"
                                                class="img-responsive" alt=""></a>
                                    </li>
                                    <li><span class="name">{{ $item->name }}</span></li>
                                    <li><span class="cost">$ {{ $item->price }}</span></li>
                                    <li><span>{{ $item->quantity }}</span></li>
                                    <div class="clearfix"></div>
                                </ul>
                            @endforeach
                        </div>
                        @isset($item)
                            <script>
                                let id = {{ $item->id }}

                                $(document).ready(function () {
                                    $('.close1').click(function (event) {
                                        event.preventDefault()
                                        remove()
                                    })
                                })

                                function remove() {
                                    $.ajax({
                                        url: "{{ route('cart.remove')}}",
                                        type: "POST",
                                        data: {
                                            "_token": "{{ csrf_token() }}",
                                            id: id,
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
                        @endisset
                    </div>
                </div>
            @else
                <div class="ckeck-top heading">
                    <h2>Your cart is empty</h2>
                </div>
            @endisset
        </div>
@endsection
