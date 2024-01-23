<style>
	.loker-img {
		width: 100%;
		height: 200px;
		object-fit: cover;
	}
</style>

<?php if ($this->session->flashdata('msg')) : ?>
	<div class="flashdata" data-flash="<?= $this->session->flashdata('msg'); ?>"></div>
<?php endif; ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(./assets/img/dashboard/buildingglass.jpg); background-size: cover; background-position: center top;">
	<!-- Mask -->
	<span class="mask bg-gradient-default opacity-8"></span>
	<!-- Header container -->
	<div class="container-fluid d-flex align-items-center">
		<div class="row">
			<div class="col-lg-7 col-md-10">
				<h1 class="display-2 text-white">PT. MULTI TALENT UNIVERSAL</h1>
				<p class="text-white mt-0 mb-5">Perusahaan yang bergerak dibidang Jasa Outsourcing Manajemen Sumber Daya Manusia. Didirikan oleh para staf ahli dibidang Jasa Outsourcing dan Konsultan Manajemen.</p>
			</div>
		</div>
	</div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
	<div class="row">
		<div class="col-xl-12 order-xl-1">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">WE ARE HIRING </h3>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form>
						<h6 class="heading-small text-muted mb-4">We Are Looking For:</h6>
						<div class="pl-lg-4">
							<div class="row">
								<?php foreach ($loker as $l) : ?>
									<div class="col-md-4">
										<div class="card" style="overflow: hidden;">
											<img class="loker-img" width="400" src="<?= base_url('assets/img/loker/' . $l['img']); ?>" alt="">
											<div class="p-2 ">
												<p class="font-weight-bold"><?= $l['posisi']; ?></p>
												<p>Posisi : <?= $l['jabatan']; ?></p>
											</div>
											<div class="p-2 text-center">
												<a href="<?= base_url('welcome/detailloker/' . $l['id_loker']); ?>" class="btn btn-dark w-100">Lihat Detail</a>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<hr class="my-4" />
					</form>
				</div>
			</div>
		</div>
	</div>