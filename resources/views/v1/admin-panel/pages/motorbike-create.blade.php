@extends('v1.admin-panel.layouts.default')
@section('content')
<h1>موتورسیکلت جدید</h1>
<form method="post" action="{{route('motorbikes.store')}}" >
    {!! csrf_field() !!}

    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif
    </div>
    <div class="form-control">
    <label for="model">مدل</label>
    <input type="text" id="model" name="model" tabindex="1" placeholder="مدل" value="{{old('model')}}">
        @if($errors->has('model'))
            @foreach($errors->model as $error)
            <p>{{$error}}</p>
            @endforeach
        @endif
    </div>

    <div class="form-control">
    <label for="color">رنگ</label>
    <input type="text" id="color" name="color" tabindex="2" placeholder="رنگ" value="{{old('color')}}">
    @if($errors->has('color'))
        @foreach($errors->color as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    </div>

    <div class="form-control">
    <label for="weight">وزن(کیلوگرم)</label>
    <input type="number" id="weight" name="weight" tabindex="3" placeholder="وزن" value="{{old('weight')}}">
    @if($errors->has('weight'))
        @foreach($errors->weight as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    </div>

    <div class="form-control">
    <label for="price">قیمت(تومان)</label>
    <input type="number" id="price" name="price" tabindex="4" placeholder="قیمت" value="{{old('price')}}">
    @if($errors->has('price'))
        @foreach($errors->price as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    </div>

    <div class="form-control">
        <label for="img_path">تصویر</label>
        <input type="number" id="img_path" name="img_path" tabindex="5" placeholder="آدرس تصویر" value="{{old('img_path')}}">
        @if($errors->has('img_path'))
            @foreach($errors->img_path as $error)
                 <p>{{$error}}</p>
            @endforeach
        @endif
    </div>

    <input type="submit" value="ثبت">
    <p><a href="{{route('pubmotorbike.index')}}">انصراف</a></p>
</form>
@endsection