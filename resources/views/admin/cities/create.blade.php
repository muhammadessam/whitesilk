@extends('layouts.admin')
@section('content')
    <div class="row layout-top-spacing">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline-block">اضافة مدينة جديد</h3>
                    <div class="d-inline-block float-right">
                        <a href="{{route('admin.cities.index')}}" title="عرض الكل" class="btn btn-primary"><i class="fa fa-list"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.cities.store')}}" class="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="font-weight-bold"><strong>الاسم</strong></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                            <x-error title="name"></x-error>
                        </div>
                        <div class="form-group">
                            <label for="price" class="font-weight-bold">سعر التوصيل</label>
                            <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}">
                            <x-error title="price"></x-error>
                        </div>
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">الدولة</label>
                            <select name="country_id" id="country_id" class="form-control">
                                @foreach(\App\Country::all() as $item)
                                    <option value="{{$item['id']}}" {{$item['id']==old('country_id') ?'selected':''}}>{{$item['name']}}</option>
                                @endforeach
                            </select>
                            <x-error title="name"></x-error>
                        </div>

                        <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i> حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection