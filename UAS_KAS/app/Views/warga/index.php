<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>Nomor Rumah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php if($warga): foreach($warga as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nik']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kelamin']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['no_rumah']; ?></td>
        <td><?= $row['status']; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="4">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/footer'); ?>