@extends('front/layout.layout')

@section('page_title','My Post')

@section('page_name', $result[0]->title)

@section('container')
<div class="container">
                        <h1>{{$result[0]->title}}</h1>
                        <p>{{$result[0]->long_desc}}</p>
                        </div>
@endsection