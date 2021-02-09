@extends('admin/master')
@section('admin-content')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabele sa Narudzbinama</h1>
            
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">


              <div class="card-header">
               <a href="{{route('orderlist')}}"> <h3 class="card-title">Sve Narudzbine</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Id proizvoda</th>
                    <th>Id kupca</th>
                    <th>status</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Adresa</th>
                    <th>Telefon</th>
                    <th>Izbrisi</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($orders as $data)
                  <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->product_id}}</td>
                    <td>{{$data->user_id}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->fname}}</td>
                    <td>{{$data->lname}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->number}}</td>
                    <td>
                    <form action="{{route('order-delete', $data->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Izbrisi</button>
                    </form>
                    </td>

                  </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->


@endsection