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
          <a class="btn btn-secondary" href="product-table">Nazad</a>
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
              <form action="save-product" method="POST">
              {{ csrf_field() }}

                <div class="card-body">
                <div class="row">
                <div class="col-md-8">

                  <div class="form-group">
                    <label>Ime</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Ime Proizvoda">
                  </div>

                  <div class="form-group">
                    <label>Cena</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Cena">
                  </div>

                  <div class="form-group">
                    <label>Kategorija</label>
                    <select class="form-control" id="category" name="category_id" placeholder="Kategorija" required>
                    @foreach($categories as $data)
                      <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Opis</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Opis">
                  </div>

                  <div class="form-group">
                    <label>Slika</label>
                    <input type="text" class="form-control" name="galery" id="galery" placeholder="Slika" value="../public/slike/">
                  </div>

                </div>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Dodaj</button>
                  <a href="../admin/product-table" class="btn btn-warning">Obustavi</a>
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