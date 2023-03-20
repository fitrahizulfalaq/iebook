<!-- App Header -->
<div class="appHeader no-border transparent position-absolute">
	<div class="left">
		<a href="#" class="headerButton goBack">
			<ion-icon name="chevron-back-outline"></ion-icon>
		</a>
	</div>
	<div class="pageTitle"></div>
	<div class="right">
		<a href="<?= base_url('auth/login') ?>" class="headerButton">
			تسجيل الدخول
		</a>
	</div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

	<div class="section mt-2 text-center">
		<h1>تسجيل حساب</h1>
		<h4>يرجى ملء نموذج البيانات التالي</h4>
	</div>

	<div class="section mb-5 p-2">
		<?= form_open_multipart('') ?>
		<div class="card">
			<div class="card-body">
				<?php $this->view('message') ?>
				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="username">اسم المستخدم</label>
						<input type="username" name="username" class="form-control" id="username" placeholder="Ex: fitrahizulfalaq" value="<?= set_value('username'); ?>" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('username') ?>
				</div>

				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="password">كلمة المرور</label>
						<input type="password" name="password" class="form-control" id="password" autocomplete="off" placeholder="Ex: IeBook-2023" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('password') ?>
				</div>

				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="nama">الاسم المستخدم</label>
						<input type="nama" name="nama" class="form-control" id="username" placeholder="Ex: Fitrah Izul Falaq" value="<?= set_value('nama'); ?>" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('nama') ?>
				</div>

				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="email">البريد الالكتروني</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="fitrah@bikinkarya.com" value="<?= set_value('email'); ?>" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('email') ?>
				</div>

				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="hp">رقم المحمول</label>
						<input type="text" name="hp" class="form-control" id="hp" placeholder="081231390340" maxlength="15" minlength="11" value="<?= set_value('hp'); ?>" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('hp') ?>
				</div>

				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="tgl_lahir">تاريخ الميلاد</label>
						<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('tgl_lahir') ?>
				</div>

				<div class="form-group basic">
					<div class="input-wrapper">
						<label class="label" for="tempat_lahir">مكان الميلاد</label>
						<input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Probolinggo" value="<?= set_value('tempat_lahir'); ?>" required>
						<i class="clear-input">
							<ion-icon name="close-circle"></ion-icon>
						</i>
					</div>
					<?php echo form_error('tempat_lahir') ?>
				</div>

				<div class="custom-control custom-checkbox mt-2 mb-1">
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="customCheckb1" required>
						<label class="form-check-label" for="customCheckb1">
							جميع البيانات التي أدخلتها صحيحة
						</label>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="form-button-group transparent">
		<button type="submit" class="btn btn-primary btn-block btn-lg">يسجل</button>
	</div>

	<?= form_close() ?>
</div>

</div>
<!-- * App Capsule -->