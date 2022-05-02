<div class="cart box_1">
    <a href="{{ route('cart.index') }}">
        <div class="total">
            @auth()
                $ <span class="simpleCart_total">{{ Cart::session(\Illuminate\Support\Facades\Auth::user()->id)->getSubTotal() }}</span>
            @else
                $  <span class="simpleCart_total">0.00</span>
            @endauth
        </div>
        <img src="{{ asset('storage/' .'cart-1.png')}}" alt=""/>
    </a>
    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
    <div class="clearfix"></div>
</div>
