<div class = "mt-4">
    <form class="font-monospace" method="POST" action="<?= base_url('simpan_barang'); ?>">
        <div class = "d-flex flex-row gap-5">
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input class= "form-control" type="text" name="kd_brg" required>
            </div>
            <div class="mb-3 ">
                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input class= "form-control" type="text" name="nama_brg" required>
            </div>
            <div class="mb-3">
                <P class="d-inline">Kode Jenis</P>
                <select name="kd_jns1" class="form-select " aria-label="Default select example">
                        <?php foreach ($edata as $ubah) : ?>
                    <option   value="<?= $ubah->kode_jenis ?>"><?= $ubah->kode_jenis ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
        </div>
    
        <div class = "d-flex flex-row gap-5">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                <input class= "form-control" type="text" name="jml_brg" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga Beli</label>
                <input class= "form-control" type="text" name="hrg_beli" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga Jual</label>
            <input class= "form-control w-25" type="text" name="hrg_jual" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Keterangan</label>
            <input class= "form-control w-25" type="text" name="keterangan" required>
        </div>
        <button name="submit" type="submit" class="btn btn-primary mb-5">submit</button>
    </form>
</div>


