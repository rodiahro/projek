@extends('layout.master')
    <div class="container">
<!--       <h1>Edit data</h1> -->
      <div class="rowd-flex align-items-center justify-content-between">
      <div class="banner-content-center col-md-12" style="position: relative; top:15rem;">

        
          <div class="col-md-12">
           <form action="/addcar" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
                <h2 class="text-center" style="position: relative; bottom: 20px;">add car</h2>      
                <div class="form-group">
                  <label >car name</label>
                  <input type="text" class="form-control" name="carname" id="carname" placeholder="carname" required=""  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label for="exampleForControllTextare1">price</label>
                  <input type="number" class="form-control" name="price" id="price" placeholder="price" required="" "/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <label for="exampleForControllTextare1">Stok</label>
                  <input type="number" class="form-control" name="stok" id="stok" placeholder="stok" required="" />
                  <div class="validation"></div>
                </div>
                
                </div><br><br>
                <div class="text-center">
                  <input type="submit" name="submit" value="add data" class="btn btn-primary">
                </div>
      </form>
          </div>
        </div>
      </div>       
