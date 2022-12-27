@extends('admin.index')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">جدول ریسپانسیو</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <a href="{{route('admin.product.create')}}">ساخت محصول</a>


              </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tr>
              <th>شماره</th>
              <th>نام</th>
              <th>اپدیت</th>
              <th>حذف</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><a href="{{route('product.show',['product'=>$product->id])}}">{{$product->name}}</a></td>
                <td><a href="{{route('admin.product.edit',['product'=>$product->id])}}">اپدیت</a></td>
                <td><a href="{{route('admin.product.delete',['product'=>$product->id])}}">حذف</a></td>

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


















gate
policy
