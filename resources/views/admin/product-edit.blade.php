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
          <a class="btn btn-secondary" href="../product-table">Nazad</a>
            <h1>Izmena Proizvoda</h1>
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
              <form action="{{route('product-update', $products->id)}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}

                <div class="card-body">
                <div class="row">
                <div class="col-md-8">

                  <div class="form-group">
                    <label>Ime</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$products->name}}" placeholder="Korisnicko Ime">
                  </div>

                  <div class="form-group">
                    <label>Cena</label>
                    <input type="text" class="form-control" name="price" id="price" value="{{$products->price}}" placeholder="Cena">
                  </div>

                  <div class="form-group">
                    <label>Kategorija</label>
                    <select class="form-control" id="category" name="category" placeholder="Kategorija">
                      <option value="stolice">Stolice</option>
                      <option value="stolovi">Stolovi</option>
                      <option value="police">Police</option>
                      <option value="lampe">Lampe</option>
                      <option value="ljuljaske">Ljuljaske</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label>Opis</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{$products->description}}" placeholder="Opis">
                  </div>

                  <div class="form-group">
                    <label>Slika</label>
                    <input type="text" class="form-control" name="galery" id="galery" value="{{$products->galery}}" placeholder="Cena">
                  </div>

                </div>
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Izmeni</button>
                  <a href="../product-table" class="btn btn-warning">Obustavi</a>
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