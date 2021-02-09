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
          <a class="btn btn-secondary" href="category-table">Nazad</a>
            <h1>Dodaj Novi Proizvod</h1>
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
              <form action="save-category" method="POST">
              {{ csrf_field() }}

                <div class="card-body">
                <div class="row">
                <div class="col-md-8">

                  <div class="form-group">
                    <label>Ime</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ime Kategorije">
                  </div>

                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                  </div>

                  <div class="form-group">
                    <label>Slika</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="Slika">
                  </div>

                </div>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Dodaj</button>
                  <a href="../admin/category-table" class="btn btn-warning">Obustavi</a>
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