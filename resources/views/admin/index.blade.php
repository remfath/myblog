@extends('layouts.admin')

@section('content')
    <table class="table table-hover table-striped">
        <tr>
            <th style="text-align: center;">标题</th>
            <th width="100" style="text-align: center;">分类</th>
            <th width="150" style="text-align: center;">发表时间</th>
            <th width="230" style="text-align: center;">操作</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td style="text-align: center;">
                    <span class="label label-info" style="width: 80px;display: inline-block;">{{ $post->category->name }}</span>
                </td>
                <td style="text-align: center;">{{ $post->created_at }}</td>
                <td style="text-align: center;">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-info">
                            <span class="glyphicon glyphicon-info-sign"></span> 查看
                        </button>
                        <button type="button" class="btn btn-primary">
                            <span class="glyphicon glyphicon-pencil"></span> 更新
                        </button>
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> 删除
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $posts->links() }}
@endsection