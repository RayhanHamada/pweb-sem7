<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	<h5 class="my-0 mr-md-auto font-weight-normal">Praktikum PWEB</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-dark" href="<?= base_url('pweb/tambah') ?>">Tambah Data</a>
	</nav>
	<a class="btn btn-outline-primary" href="<?= base_url('pweb/logout') ?>">Sign Out</a>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
	<h1 class="display-4 pt-0">Tabel Nilai Kelas 4IAXX</h1>
</div>

<div class="container">
	<table class="table table-hover mb-5">
		<thead class="thead-light align-middle">
			<tr>
				<th rowspan="2" class="align-middle text-center">No.</th>
				<th rowspan="2" class="align-middle text-center">Nama</th>
				<th colspan="5" class="text-center">Nilai</th>
				<th rowspan="2" class="align-middle text-center">Keterangan</th>
				<th rowspan="2" class="align-middle text-center">Aksi</th>
			</tr>
			<tr>
				<th class="text-center">Pert1</th>
				<th class="text-center">Pert2</th>
				<th class="text-center">Pert3</th>
				<th class="text-center">Pert4</th>
				<th class="text-center">Rata - rata</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($nilai as $data) : ?>
				<tr <?php if ($data['keterangan'] == 'Tidak Lulus') echo 'class="bg-warning"' ?>>
					<th class="align-middle text-center"><?= $data['id_nilai'] ?></th>
					<td class="align-middle"><?= $data['nama_mahasiswa'] ?></td>
					<td class="align-middle text-center"><?= $data['nilai1'] ?></td>
					<td class="align-middle text-center"><?= $data['nilai2'] ?></td>
					<td class="align-middle text-center"><?= $data['nilai3'] ?></td>
					<td class="align-middle text-center"><?= $data['nilai4'] ?></td>
					<td class="align-middle text-center"><?= $data['rata'] ?></td>
					<td class="align-middle text-center"><?= $data['keterangan'] ?></td>
					<td class="align-middle text-center">
						<a href="" class="align-middle btn btn-success">Edit</a>
						<a href="" class="align-middle btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
