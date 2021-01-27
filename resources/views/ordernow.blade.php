@extends('master')
@section('content')
<div class="cart-container custom-product">
<div class="col-sm-10">
    <table class="table table-striped">
        <tbody>
        <tr>
            <td>Iznos</td>
            <td>{{$total}} Dinara</td>
        </tr>
        <tr>
            <td>Taxa</td>
            <td>0 Dinara</td>
        </tr>
        <tr>
            <td>Postarina</td>
            <td>220 Dinara</td>
        </tr>
        <tr>
            <td>Ukupan Iznos</td>
            <td>{{$total + 220}}</td>
        </tr>
        </tbody>
    </table>
    <div>
    <form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
    <label for="fname">Ime:</label>
    <input type="text" class="form-control" name="fname">
  </div>
  <div class="form-group">
    <label for="lname">Prezime:</label>
    <input type="text" class="form-control" name="lname">
  </div>
  <div class="form-group">
    <label for="address">Adresa Isporuke:</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="form-group">
    <label for="number">Telefon:</label>
    <input type="text" class="form-control" name="number">
  </div>
  <button type="submit" class="btn btn-success">Naruci</button>
</form> 
    </div>
</div>
</div>
@endsection