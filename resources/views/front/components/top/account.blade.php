<div class="box p_account" style="">
    @if (Auth::check())
        <ul class="header_user_info" style="color: white">
            <li class="user_desc">Hello, {{ \Illuminate\Support\Facades\Auth::user()->name }}</li>
            <a class="login" href="{{ route('cabinet') }}" style="color: white">
                <li>My account</li>
            </a>
{{--            <a class="login">--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}
{{--                    <button type="submit">Log out</button>--}}
{{--                </form>--}}
{{--            </a>--}}
        </ul>
    @else
        <a href="{{ route('login') }}" class="">Log in</a>
    @endif
    <div class="clearfix"></div>
</div>
