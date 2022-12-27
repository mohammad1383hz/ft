@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">جدول ریسپانسیو</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{{route('admin.category.create')}}">ساخت دسته بندی</a>


            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tr>
              <th>شماره</th>
              <th>نام دسته بندی</th>
              <th>اپدیت </th>
              <th>حذف</th>


            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><a href="{{route('admin.category.edit',['category'=>$category->id])}}">اپدیت</a></td>
                <td><a href="{{route('admin.category.delete',['category'=>$category->id])}}">حذف</a></td>


              </tr>
            @endforeach


          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div><!-- /.row -->
@endsection
