@extends('front.app')

@section('content')
<div class="container">
    <div class="ckeck-top heading">
        <h2>{{ $exception->getMessage() }}</h2>
       <h1>404 - NOT FOUND</h1>
    </div>
</div>
@endsection
