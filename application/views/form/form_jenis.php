<div class = "mt-4" >
    <form class="font-monospace" method="POST" action="<?= base_url('simpan_jenis'); ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Jenis</label>
            <input type="text" name="kd_jns" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Jenis</label>
            <input type="text" name="jenis" required>
        </div>
        <button name="submit" type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>

</div>