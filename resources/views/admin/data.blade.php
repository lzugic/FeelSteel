@extends('admin/master')
@section('admin-content')

<div class="wrapper">

    @include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabele sa Korisnickim Podatcima</h1>
            
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
                <h3 class="card-title">Svi Korisnici</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Ime</th>
                    <th>Email</th>
                    <th>Tip Korisnika</th>
                    <th>Izmeni</th>
                    <th>Izbrisi</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $data)
                  <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->is_admin}}</td>
                    <td>
                    <a href="role-edit/{{$data->id}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Izmeni</a>
                    </td>
                    <td>
                    <form action="{{route('role-delete', $data->id)}}" method="POST">
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