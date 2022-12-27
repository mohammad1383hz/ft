@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">جدول ریسپانسیو</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tr>
              <th>شماره</th>
              <th>کاربر</th>
              <th>تاریخ</th>
              <th>نقش</th>
              <th>تغیرات</th>
              <th>حذف</th>



            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->created_at}}</td>

                <td>{{$user->role}}</td>
                <td><a href="{{route('admin.user.edit',['user'=>$user->id])}}">اپدیت</a></td>
                <td><a href="{{route('admin.user.delete',['user'=>$user->id])}}">حذف</a></td>


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
