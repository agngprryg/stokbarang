<div class = "mt-4" >
    <form class="font-monospace mb-5" method="POST" action="<?= base_url('simpan/cari_barang'); ?>">
    <?php 
        foreach($nota as $get_nota);
        foreach($det_nota as $no_nota);
        $tgl = date('ymd');
        $nomor = @$no_nota->nota; 
        $dtgl = @$no_nota->kode_transaksi;
    ?>
        <div class="" style="height: 80px;">
            <p><label for="">Nota : <?php
                if (($nomor > 0) and ($dtgl == $tgl)){
                    $hnota = $nomor + 1;
                    $nota = @$hnota;
                    echo $tgl.@$hnota;
                }else{
                    $hnota = 1;
                    $nota = @$hnota;
                    echo $tgl.@$hnota;
                }
            ?></label></p>
            <label class="form-label">Kode Barang</label>
            <input class ="w-25" style="height: 50px;" type="text" name="kode_brg" required>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </div>       
    </form>   
</div>
<table class="table text-center">
    <thead class="thead-dark">
        <tr class="table-primary">
            <th scope="col">No</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>
            <th scope="col">Harga</th>
            <th scope="col">Total Harga</th>

        </tr>
        <?php $no = 1;
     foreach ($data as $tampil) : ?>
        <tr>
            <td><?= ($no) ?></td>
            <td><?= ($tampil->kode_brg) ?></td>
            <td><?= ($tampil->nama_brg) ?></td>
            <td><?= ($tampil->nama_jenis) ?></td>
            <td  width="10px" >
                <form method="POST" action="<?= base_url('tambah') ?>">
                    <input type="number" name="jml" width="100%"
                    value="<?= ($tampil->jml_brg_trans) ?>" onchange="this.form.submit()"/>
                    <input type="text" name="kode" value="<?= $tampil->kode_brg ?>" hidden />
                    <input type="text" name="harga" value="<?= $tampil->hrg_jual ?>" hidden />
                </form>
            </td>
            <td>
                <a href="<?= base_url('Editor/hapusTrans/'. $tampil->kode_brg); ?>">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </td>
            <td align="right"><?php echo number_format(($tampil->hrg_jual),0,"," , "."); ?></td>
            <td align="right"><?php echo number_format(($tampil->total_hrg),0,",", "."); ?></td>   
        </tr>
        <?php $no++;
     endforeach; ?>
    <form method="POST" action="">
        <tr>
            <td colspan="7" align="right"><b>Jumlah Total :</b></td>
            <?php foreach($tot as $gtot); ?>
            <td id="total" align="right">RP.<?php echo number_format(($gtot->total_hrg),0,",","."); ?></td>
        </tr>
        <tr>
            <td colspan="7" align="right"><b>Bayar :</b></td>
            <td align="right"><b>RP. </b><input type="text" name="bayar" id="" value="" onchange="this.form.submit()"></td>
        </tr>
        <?php foreach($tot as $buy)
                if(empty($this->input->post('bayar'))){
                    ?>
                    <tr>
                        <td colspan="8" align="right"><?= 0; ?></td>
                    </tr>
                    <?php
                }else{
                    $dibayar=$this->input->post('bayar');
                    $totbelanja=$buy->total_hrg;
                    $nom= preg_replace('/[^0-9-.]+/', '' ,$totbelanja);
                    $kembali=($dibayar) - ($nom);
                    ?> <tr>
                        <td colspan="7" align="right">kembali</td>
                        <td align="right" class="text-danger" >Rp . <?php echo number_format(($kembali),0,",",".");?></td>
                    </tr>
                <?php
                }
            ?>
    </form>
    <tr>  
        <td colspan="8" align="right">   
            <a href="<?= base_url('editor/detail_tr/'); ?>"><button class="btn btn-success">selesai</button></a>
        </td>
    </tr>
    </thead>
</table>