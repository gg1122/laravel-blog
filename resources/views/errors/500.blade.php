@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4">
            @include('widget.user')
            @include('widget.categories')
        </div>
        <div class="col-md-8">
            <div class="widget widget-default">
                <h1>500...Error</h1>
            </div>
        </div>
    </div>
@endsection