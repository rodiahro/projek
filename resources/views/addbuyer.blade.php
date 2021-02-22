@extends('layout.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <form action="/addbuyer" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
                <h2 class="text-center" style="position: relative; bottom: 20px;">Destination</h2>      
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="name" required="" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" id="email" placeholder="email" required="" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="no_telp"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="car_type" id="car_type" placeholder="car_type"/>
                  <div class="validation"></div>
                </div>

                <div class="text-center">
                  <input type="submit" name="submit" value="add buyer" class="btn btn-primary">
                </div>
      </form>   

			@endsection
