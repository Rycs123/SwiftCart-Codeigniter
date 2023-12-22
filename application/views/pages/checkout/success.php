<main role="main" class="container">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Checkout Berhasil
				</div>
				<div class="card-body">
					<h5>Nomer Order: <?= $content->invoice ?></h5>
					<p>Terima kasih, sudah berbelanja.</p>
					<p>Silakan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
					<ol>
						<li>Make the payment to <strong>BCA 3209123123</strong>under the name of PT. SwiftCart</li>
						<li>Include a note with the order number: <strong><?= $content->invoice ?></strong></li>
						<li>Total Payment: <strong>Rp<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
					</ol>
					<p>If done, please submit the payment proof on the confirmation page or you can <a href="<?= base_url("/myorder/detail/$content->invoice") ?>">click here</a>!</p>
					<a href="<?= base_url('/') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
</main>