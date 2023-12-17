    <div class = " m-2 p-4" >
        <h1 class="font-monospace fs-5">jenis barang <a class="btn btn-primary" href="<?= base_url('back') ?>"> kembali </a></h1>

        <div id="body">
            <?php
            $this->load->view('form/form_data_barang');
            $this->load->view('tabel/tabel_barang');
            ?>
        </div>
    </div>
