@extends('layouts.app')

@section('content')

 <div class="content">
 @foreach($contents as $content)
    <div class="top-dis">
        <head>
            <h1 class="post-title">
                <a href="/article/id/{{$content->id}}" title="">
                    {{$content->title}}
                </a>
            </h1>
            <div class="post-meta">
                <span class="post-time">时间&nbsp;&nbsp;&nbsp;{{$content->created_at}}</span> 
                <span class="seperated">&nbsp;|&nbsp;</span>
                <span class="post-category">分类&nbsp;&nbsp;&nbsp;
                    <a href="/category/id/{{$content->id}}">{{$content->cate_name}}</a>
                </span>
            </div>
        </head>
        <div class="post-body">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$content->content}}</p>
            <div class="post-more-link">
                <a href="/article/id/{{$content->id}}">阅读全文&nbsp;»</a>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
@endforeach

</div>
@endsection
