@extends('layouts.blog')

@section('content')
    <div class="content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $post->title }}</h3>
            </div>
            <div class="panel-body">
                <div class="well well-sm">{{ $post->description }}</div>
                {{ $post->content }}
            </div>
            <div class="panel-footer">
                <span class="label label-info">{{ $post->category->name }}</span>
                {{ $post->created_at }}
            </div>
        </div>
    </div>
@endsection