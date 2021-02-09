@extends('master')
@section('content')
<div class="cart-container custom-login">
<div class="col-sm-10">
    <table class="table order-table">
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
            <td>{{$total + 220}} Dinara</td>
        </tr>
        </tbody>
    </table>
    <div>
    <form action="orderplace" method="POST">
    @csrf
    <div class="order-form">
  <div class="row">
  <div class="form-group col-xs-4">
    <label for="fname">Ime:</label>
    <input type="text" class="form-control" name="fname">
  </div>
  <div class="form-group col-xs-4">
    <label for="lname">Prezime:</label>
    <input type="text" class="form-control" name="lname">
  </div>
  </div>
  <div class="row">
  <div class="form-group col-xs-4">
    <label for="address">Adresa Isporuke:</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="form-group col-xs-4">
    <label for="number">Telefon:</label>
    <input type="text" class="form-control" name="number">
  </div>
  </div>
  <button type="submit" class="btn btn-success">Naruci</button>
  </div>
</form> 
    </div>
</div>
</div>
@endsection