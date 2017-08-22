@extends('layouts.frontend')

@section('content')
    <div class="content-wrapper">
        @foreach($posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post->title }}</h3>
                </div>
                <div class="panel-body">
                    {{ $post->description }}
                </div>
                <div class="panel-footer">
                    <a href="/post/{{ $post->id }}" class="btn btn-primary btn-sm active" role="button">阅读原文</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection