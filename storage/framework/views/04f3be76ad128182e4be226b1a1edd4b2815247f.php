<?php $__env->startSection('content'); ?>
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
								<h3 class="text-center" style="position: relative; bottom: 20px;">Car Data</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID_Car</th>
												<th>Name Car</th>
												<th>Prce</th>
												<th>Stock</th>
												<td>Action</td>
												
											</tr>
										</thead>
										<tbody>
						               
						                <tr>
						                	
						                	<td><a href="" class="btn btn-warning">Edit</a></td>
						                	<td><a href="" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')">delete</a></td>
						                </tr>
						              
						              </tbody>
						              <a href="/addcar" style="position: relative; left: 1000px; bottom: 20px"><button type="button" class="btn btn-success" >Add car</button></a>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rdh_projek\resources\views/cardata.blade.php ENDPATH**/ ?>