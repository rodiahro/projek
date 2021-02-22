<?php $__env->startSection('content'); ?>
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
						               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                <tr>
						                	<td><?php echo e($dt->id_buyer); ?></td>
						                	<td><?php echo e($dt->name); ?></td>
						                	<td><?php echo e($dt->email); ?></td>
						                	<td><?php echo e($dt->no_telp); ?></td>
						                	<td><?php echo e($dt->car_type); ?></td>
						                	<td><a href="/buyer/<?php echo e($dt->id_buyer); ?>/ediy" class="btn btn-warning">Edit</a></td>
						                	<td><a href="/buyer/<?php echo e($dt->id_buyer); ?>/ediy" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')">delete</a></td>
						                </tr>
						                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rdh_projek\resources\views/buyer.blade.php ENDPATH**/ ?>