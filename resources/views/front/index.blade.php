@extends('front/layout.layout')

@section('page_title','My Blog')

@section('page_name','My First Blog')

@section('container')

<!-- Main Content-->
<div class="container px-3 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-9">
        @foreach($result as $list)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{url('post/'.$list->slug)}}">
                    <h2 class="post-title">{{$list->title}}</h2>
                    <h3 class="post-subtitle">{{$list->short_desc}}</h3>
                </a>
                <p class="post-meta">
                   Posted on {{$list->post_date}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                    →</a></div>
        </div>
    </div>
</div>

@endsection