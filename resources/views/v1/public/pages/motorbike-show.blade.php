@extends('v1.public.layouts.default')
@section('content')
    <h1>{{$motorbike->model}} دوچرخه</h1>
        <div class="container-fluid">
            <span>توسط:</span>
            <p>{{$motorbike->admin->name}}</p>
        </div>

        <div class="container-fluid">
            <span>مدل:</span>
            <p>{{$motorbike->model}}</p>
        </div>

        <div class="container-fluid">
            <span>رنگ:</span>
            <p>{{$motorbike->color}}</p>
        </div>

        <div class="container-fluid">
            <span>وزن:</span>
            <p>{{$motorbike->weight}}</p>
        </div>

        <div class="container-fluid">
            <span>قیمت:</span>
            <p>{{$motorbike->price}}</p>
        </div>

        <div class="container-fluid">
            <span>تصویر:</span>
            <span><img width="200" height="300" src="@if($motorbike->img_path) {{$motorbike->img_path}} @else {{asset('/uploads/motorbikes/default.jpg')}}" />@endif</span>

        </div>
@endsection