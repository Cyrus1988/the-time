<div class="box p_account" style="">
    @if (Route::has('register'))
        @auth
            <ul class="header_user_info" style="color: white">
                <li class="user_desc">Hello, {{ \Illuminate\Support\Facades\Auth::user()->name }}</li>
                <a class="login" href="{{ route('cabinet') }}" style="color: white">
                    <li>My account</li>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </ul>
        @else
            <ul class="header_user_info" style="color: white">
                <li><a href="{{ route('login') }}" class="">Log in</a></li>
                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
        @endif
    @endif
    <div class="clearfix"></div>
</div>
