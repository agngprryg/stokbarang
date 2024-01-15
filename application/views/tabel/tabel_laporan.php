<form method="POST" action="<?= base_url('simpan/tanggal'); ?>"> 
    <div class="mb-4">
        <label for="">silahkan masukan tanggal</label><br>
        <input type="date" name="cari_tgl" id="">
        <button type="submit">cari</button>
    </div>

    <div>
    <table class="table">
        <thead class="thead-dark">
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">TANGGAL</th>
                <th scope="col">NOTA JUAL</th>
                <th scope="col">KODE BARANG</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">JUMLAH BARANG</th>
                <th scope="col">HARGA JUAL</th>
                <th scope="col">KETERANGAN</th>
            </tr>
            <?php 
            $no=1;
            foreach ($fil as $tampil):
            ?>
            <tr>
                <td><?= ($no); ?></td>
                <td><?= ($tampil->tgl_transaksi); ?></td>
                <td><?= ($tampil->kode_transaksi).($tampil->nota) ?></td>
                <td><?= ($tampil->kode_brg) ?></td>
                <td><?= ($tampil->nama_brg) ?></td>
                <td><?= ($tampil->jmlbrg)." ".($tampil->nama_jenis) ?></td>
                <td><?= ($tampil->hrg_jual) ?></td>
                <td><?= ($tampil->total_hrg) ?></td>
            </tr>
            <?php $no++; endforeach;?>
        </thead>
    </table>
    </div>
</form>