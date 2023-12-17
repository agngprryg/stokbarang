<form class="font-monospace" method="POST" action="<?= base_url('update_jenis'); ?>">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kode Jenis</label>
        <?php foreach ($edata as $ubah) : ?>
            <input type="text" name="kd_brg" value="<?= $ubah->kode_jenis; ?>" readonly required />
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Jenis</label>
        <input type="text" name="jenis" value="<?= $ubah->nama_jenis; ?>" required />
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jumlah Jenis</label>
        <input type="text" name="jml_jenis" value="<?= $ubah->jumlah_jenis; ?>" required />
    </div>
    <button name="submit" type="submit" class="btn btn-primary rounded-5" style="width: 170px;">Submit</button>
    <a class="btn btn-primary rounded-5" style="width: 250px;" href="<?= base_url('data_jenis') ?>">Gajadi ngedit ah😅😅</a>
</form>
<?php endforeach; ?>