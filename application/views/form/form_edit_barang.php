<form method="post" action="<?= base_url('update_barang') ?>">
    <?php foreach ($ebdata as $row) : ?>
        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input name="kode_brg" type="text" value="<?= $row->kode_brg ?>" readonly required>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA BARANG</label>
            <input name="nama_brg" type="text" value="<?= $row->nama_brg ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">KODE JENIS</label>
            <input name="kode_jenis" type="text" value="<?= $row->kode_jenis ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">UMLAH BARANG</label>
            <input name="jml_brg" type="text" value="<?= $row->jml_brg ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">HARGA BELI</label>
            <input name="hrg_beli" type="text" value="<?= $row->hrg_beli ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">HARGA JUAL</label>
            <input name="hrg_jual" type="text" value="<?= $row->hrg_jual ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">KETERANGAN</label>
            <input name="keterangan" type="text" value="<?= $row->keterangan ?>">
        </div>
    <?php endforeach ?>
    <button name="submit" type="submit" class="btn btn-primary rounded-5" style="width: 170px;">Submit</button>
    <a class="btn btn-primary rounded-5" style="width: 250px;" href="<?= base_url('data_barang') ?>">Gajadi ngedit ah😅😅</a>
</form>