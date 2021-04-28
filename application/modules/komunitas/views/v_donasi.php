<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="text-center">
			<h3>Nama Donatur</h3>
		</div>
		<br><br>
		<div class="row">
			<div class="row d-flex">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2">No.</div>
						<div class="col-sm-3">Tanggal</div>
						<div class="col-sm-4">Nama Donatur</div>
						<div class="col-sm-3">Nominal</div>
						<?php
                        $i=1;
                        $totaldonasi=0;
                        foreach ($donasi as $donasi) {
                            $totaldonasi += $donasi['nominal'];
                            ; ?>
						<div class="col-sm-2">
							<?= $i ; ?>
						</div>
						<div class="col-sm-3">
							<?= tgl_indo($donasi['tgl']) ; ?>
						</div>
						<div class="col-sm-4">
							<?= $donasi['nama_admin'] ; ?>
						</div>
						<div class="col-sm-3">
							<?='Rp. ' .number_format($donasi['nominal'], 0, ',', '.') ; ?>
						</div>
						<?php
                        $i++;
                        } ;?>
					</div>
					<br><br>
					<div class="text">
						Total Donasi Terkumpul Sebesar : <h1><button class="btn btn-info btn-lg"> <?= 'Rp. ' .number_format($totaldonasi, 0, ',', '.') ;?></button></h1>
					</div>
					<br>
					<div class="text">Terimas Kasih kami ucapkan atas kebaikan para donatur</div>
					<div class="text">NB : Semua donasi yang terkumpul digunakan untuk biaya operasional panti</div>
				</div>
			</div>
		</div>
		<!-- <?php echo $pagination; ?> -->
	</div>
</section>
<div id='Back-to-top'>
	<img alt='Scroll to top' src='<?php echo base_url('frontend') ?>/assets/images/backtotop.png' />
</div>