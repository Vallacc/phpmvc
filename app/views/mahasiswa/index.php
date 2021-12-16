<div class="container mt-2">
	<h2>ini halaman mahasiswa</h2>
	<?php foreach($data['mhs'] as $mhs) : ?>
		<ul>
			<li><?= $mhs['nama_mhs'] ?></li>
			<li><?= $mhs['npm'] ?></li>
			<li><?= $mhs['prodi'] ?></li>
			<li><?= $mhs['kelas'] ?></li>
			<li><?= $mhs['jk'] ?></li>
		</ul>
	<?php endforeach;  ?>
</div>