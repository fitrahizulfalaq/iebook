<!-- App Capsule -->
<div id="appCapsule">
	<div class="section full gradientSection">
		<div class="in">
			<center>
				<img src="<?=base_url()?>/assets/img/logo.png" alt="logo" class="imaged w-100">

			</center>
		</div>
	</div>
	
	<div class="section mt-4">
		<div class="tab-content">
			<!-- feed -->
			<div class="tab-pane fade show active" id="feed" role="tabpanel">
				<div class="mt-2 pr-2 pl-2">
					<?php $this->view("message") ?>
					<div class="row">
						<div class="col-lg-6 col-6">
							<!-- small card -->
							<div class="card product-card">
								<div class="inner text-center">
									<a href="<?= site_url('page/petunjuk') ?>">
										<img src="<?= base_url("") ?>/assets/img/icon/petunjuk.png" alt="" width="100%">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-6">
							<!-- small card -->
							<div class="card product-card">
								<div class="inner text-center">
									<a href="<?= site_url('page/pendahuluan') ?>">
										<img src="<?= base_url("") ?>/assets/img/icon/pendahuluan.png" alt="" width="100%">
									</a>
								</div>
							</div>
						</div>						
					</div>
					<div class="row mt-2">
						<div class="col-lg-6 col-6">
							<!-- small card -->
							<div class="card product-card">
								<div class="inner text-center">
									<a href="<?= site_url('page/video') ?>">
										<img src="<?= base_url("") ?>/assets/img/icon/video.png" alt="" width="100%">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-6">
							<!-- small card -->
							<div class="card product-card">
								<div class="inner text-center">
									<a href="<?= site_url('page/materi') ?>">
										<img src="<?= base_url("") ?>/assets/img/icon/materi.png" alt="" width="100%">
									</a>
								</div>
							</div>
						</div>						
					</div>
					<div class="row mt-2">
						<div class="col-lg-6 col-6">
							<!-- small card -->
							<div class="card product-card">
								<div class="inner text-center">
									<a href="<?= site_url('page/pengembang') ?>">
										<img src="<?= base_url("") ?>/assets/img/icon/profil.png" alt="" width="100%">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-6">
							<!-- small card -->
							<div class="card product-card">
								<div class="inner text-center">
									<a href="<?= site_url('page/latihan/') ?>">
										<img src="<?= base_url("") ?>/assets/img/icon/kuis.png" alt="" width="100%">
									</a>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<!-- * feed -->
		</div>
	</div>
	<br>
	<br>
</div>
<!-- * App Capsule -->