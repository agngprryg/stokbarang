<table class="table">
    <thead class="thead-dark">
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">KODE BARANG</th>
            <th scope="col">NAMA BARANG</th>
            <th scope="col">KODE JENIS</th>
            <th scope="col">JUMLAH BARANG</th>
            <th scope="col">HARGA BELI</th>
            <th scope="col">HARGA JUAL</th>
            <th scope="col">KETERANGAN</th>
            <th scope="col">ACTION</th>
        </tr>
    </thead>
    <?php $no = 1;
    foreach ($dataBarang as $tampil) : ?>
        <tr>
            <td><?= ($no) ?></td>
            <td><?= ($tampil->kode_brg) ?></td>
            <td><?= ($tampil->nama_brg) ?></td>
            <td><?= ($tampil->kode_jenis) ?></td>
            <td><?= ($tampil->jml_brg) ?></td>
            <td><?= ($tampil->hrg_beli) ?></td>
            <td><?= ($tampil->hrg_jual) ?></td>
            <td><?= ($tampil->keterangan) ?></td>
            <td>
                <a href="<?= base_url('Editor/edit_data_brg/' . $tampil->kode_brg); ?>">
                    <button class="btn btn-light font-dark">Edit</button>
                </a>
                <a href="<?= base_url('Editor/hapusBrg/' . $tampil->kode_brg); ?>">
                    <button class="btn btn-dark">Hapus</button>
                </a>
            </td>
        </tr>
    <?php $no++;
    endforeach; ?>
</table>