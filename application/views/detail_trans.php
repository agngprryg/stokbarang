<a href="<?= base_url('transaksi') ?>">Back</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
        </tr>
        <?php $no = 1;
     foreach ($data as $tampil) : ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $tampil->nama_brg ?></td>
            <td><?= $tampil->jml_brg_trans ?></td>
            <td><?= $tampil->total_hrg ?></td>
        </tr>
        <?php $no++;
     endforeach; ?>
     <td colspan="5" align="right">Bayar RP .<input type="text"></td>
     <tr>
         <td colspan="5" align="right">
            <a
                 href="<?= base_url('Editor/pembayaran') ?>">
                <button class="btn btn-success">Bayar</button>
             </a>
        </td>
     </tr>
    </thead>
</table>
