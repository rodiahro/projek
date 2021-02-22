@extends('layout.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
								<h3 class="text-center" style="position: relative; bottom: 20px;">DAFTAR TRANSAKSI</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID_Buyer</th>
												<th>Name</th>
												<th>Email</th>
												<th>No_telp</th>
												<th>Car_Type</th>
												<td>Action</td>
												
											</tr>
										</thead>
										<tbody>
						               @foreach($data as $dt)
						                <tr>
						                	<td>{{$dt->id_buyer}}</td>
						                	<td>{{$dt->name}}</td>
						                	<td>{{$dt->email}}</td>
						                	<td>{{$dt->no_telp}}</td>
						                	<td>{{$dt->car_type}}</td>
						                	<td><a href="/buyer/{{$dt->id_buyer}}/edit" class="btn btn-warning">Edit</a></td>
						                	<td><a href="/buyer/{{$dt->id_buyer}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')">delete</a></td>
						                </tr>
						                @endforeach
						              </tbody>
						              <a href="/addbuyer" style="position: relative; left: 1000px; bottom: 20px"><button type="button" class="btn btn-success" >Add buyer</button></a>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@stop
