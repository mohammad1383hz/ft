@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-lg-12">
        {{-- @include('admin.layouts.errors') --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">فرم ایجاد ل</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" action= {{ route('admin.category.update', ['category'=>$category->id]) }} method="POST">
                @method('PUT')
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">category name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید" value={{$category->name}}>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">ثبت ل</button>
                    <a href="#" class="btn btn-default float-left">لغو</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@endsection
