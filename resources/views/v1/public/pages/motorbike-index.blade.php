@extends('v1.public.layouts.default')
@section('content')
    <h1>لیست موتورسیکلت ها</h1>
    <table class="table">
        <tr>
            <td>شناسه</td>
            <td>توسط</td>
            <td>مدل</td>
            <td>رنگ</td>
            <td>وزن</td>
            <td>قیمت</td>
            <td>عملیات</td>
        </tr>
        @foreach($motorbikes as $row)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$row->admin->name}}</td>
                <td>{{$row->model}}</td>
                <td>{{$row->color}}</td>
                <td>{{$row->weight}}</td>
                <td>{{$row->price}}</td>
                <td>
                    <span><a href="{{route('pubmotorbike.show', $row->model)}}">نمایش</a></span>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $motorbikes->render() !!}
@endsection