@extends('layouts.app')
@section('title',$page->display_name)
@section('description',$page->display_name)
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ route('post.index') }}">博客</a></li>
                <li class="active">{{ ucfirst($page->name) }}</li>
            </ol>
            <div class="post-detail">
                @can('update',$page)
                    <div class="btn-group pull-right" style="margin-top: -25px">
                        <a class="btn" href="{{ route('page.edit',$page->id) }}"><i class="fa fa-pencil"></i></a>
                    </div>
                @endcan
                <div class="center-block">
                    <div class="post-detail-title">{{ $page->display_name }}</div>
                </div>
                <div class="post-detail-content">
                    {!! $page->html_content !!}
                </div>
            </div>
            @include('widget.comment',['commentable'=>$page,
            'redirect'=>request()->fullUrl(),
            'commentable_type'=>'App\Page'])
        </div>
    </div>
@endsection