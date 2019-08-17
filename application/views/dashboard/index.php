<div class="container">
	<div class="row my-5">
		<div class="col-12 col-sm col-md-12 col-lg-12">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card bg-white rounded-left shadow border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header bg-primary border-0 rounded shadow">
								<i class="fa fa-bookmark-o fa-5x text-light my-3"></i>
							</div>
							<div class="card-body">
								<h2>Barang</h2>
								<p class="lead"><?php echo $totalBarang; ?> <span class="badge badge-success badge-pill ml-0 ml-md-2"><a href="<?php echo site_url('barang/input'); ?>" class="text-white">Tambah Data</a></span></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card bg-white rounded-left shadow border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header bg-primary border-0 rounded shadow">
								<i class="fa fa-address-book-o fa-5x text-light my-3"></i>
							</div>
							<div class="card-body">
								<h2>Member</h2>
								<p class="lead"><?php echo $totalMember; ?> <span class="badge badge-success badge-pill ml-0 ml-md-2"><a href="<?php echo site_url('member/input'); ?>" class="text-white">Tambah Data</a></span></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card bg-white rounded-left shadow border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header bg-primary border-0 rounded shadow">
								<i class="fa fa-folder-o fa-5x text-light my-3"></i>
							</div>
							<div class="card-body">
								<h2>Sewa</h2>
								<p class="lead"><?php echo $totalSewa; ?> <span class="badge badge-success badge-pill ml-0 ml-md-2"><a href="<?php echo site_url('sewa/input'); ?>" class="text-white">Tambah Data</a></span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>