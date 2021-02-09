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
          <a class="btn btn-secondary" href="../data">Nazad</a>
            <h1>Izmena Kategorija</h1>
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
              <form action="{{route('category-update', $categories->id)}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}

                <div class="card-body">
                <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Ime</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$categories->name}}" placeholder="Korisnicko Ime">
                  </div>
                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{$categories->slug}}" placeholder="Slug">
                  </div>
                  <div class="form-group">
                    <label>Slika</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{$categories->image}}" placeholder="Slika">
                  </div>


                </div>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Izmeni</button>
                  <a href="../category-table" class="btn btn-warning">Obustavi</a>
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