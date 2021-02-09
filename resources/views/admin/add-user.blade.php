@extends('admin/master')
@section('admin-content')


<div class="wrapper">
  

  <!-- Content Wrapper. Contains page content -->
  <div class="edit-wrapper content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a class="btn btn-secondary" href="data">Nazad</a>
            <h1>Dodaj Novog Korisnika</h1>
          </div>
          <div class="">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">

              <!-- /.card-header -->
              <!-- form start -->
              <form action="save-user" method="POST">
              {{ csrf_field() }}

                <div class="card-body">
                <div class="row">
                <div class="col-md-8">

                  <div class="form-group">
                    <label>Ime</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ime Proizvoda">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label>Tip korisnika</label>
                    <select class="form-control" id="is_admin" name="is_admin" placeholder="Tip Korisnika">
                      <option value="0">User</option>
                      <option value="1">Admin</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Sifra</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Sifra">
                  </div>

                </div>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Dodaj</button>
                  <a href="../admin/data" class="btn btn-warning">Obustavi</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
@endsection