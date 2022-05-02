@if(!empty($breadcrumbs))
    @if(count($breadcrumbs) > 1)
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    @foreach($breadcrumbs as $breadcrumb)
                        @if($breadcrumb['is_active'] === true)
                            <li class="active">{{$breadcrumb['name']}}</li>
                        @else
                            <li><a href="{{ route('front.home') }}">{{$breadcrumb['name']}}</a></li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    @endif
@endif
