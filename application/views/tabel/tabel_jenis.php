<table class="table">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th scope="col">No</th>
            <th scope="col">KODE JENIS</th>
            <th scope="col">NAMA JENIS</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <?php $no = 1;
    foreach ($jancok as $tampil) : ?>
        <tr>
            <td><?= ($no) ?></td>
            <td><?= ($tampil->kode_jenis) ?></td>
            <td><?= ($tampil->nama_jenis) ?></td>
            <td>
                <a href="<?= base_url('Editor/edit/' . $tampil->kode_jenis); ?>">
                    <button class="btn btn-success">Edit</button>
                </a>
                <a href="<?= base_url('Editor/hapus/' . $tampil->kode_jenis); ?>">
                    <button class="btn btn-danger">Hapus</button>
                </a>
            </td>
        </tr>
    <?php $no++;
    endforeach; ?>
</table>