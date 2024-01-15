<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends CI_Model
{
    public function add()
    {
        $data = [
            'kode_jenis' => $this->input->post('kd_jns'),
            'nama_jenis' => $this->input->post('jenis'),
        ];
        $save = $this->db->insert('tb_jenis_barang', $data);
        if ($save) {
?> <script type="text/javascript">
                alert("berhasil disimpan");
                window.location = '../stok_barang/data_jenis';
            </script>
        <?php
        } else {
        ?> <script type="text/javascript">
                alert("gagal disimpan");
                window.location = '../stok_barang/data_jenis';
            </script>
        <?php
        }
    }
    public function add_barang()
    {
        $dataBarang = [
            'kode_brg' => $this->input->post('kd_brg'),
            'nama_brg' => $this->input->post('nama_brg'),
            'kode_jenis' => $this->input->post('kd_jns1'),
            'jml_brg' => $this->input->post('jml_brg'),
            'hrg_beli' => $this->input->post('hrg_beli'),
            'hrg_jual' => $this->input->post('hrg_jual'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $save = $this->db->insert('tb_data_barang', $dataBarang);
        if ($save) {
        ?> <script type="text/javascript">
                alert("berhasil disimpan");
                window.location = '../stok_barang/data_barang';
            </script>
        <?php
        } else {
        ?> <script type="text/javascript">
                alert("gagal disimpan");
                window.location = '../stok_barang/data_barang';
            </script>
        <?php
        }
        
    }

    public function kodeJenis()
    {
        $this->db->select('*');
        $this->db->from('tb_jenis_barang');
        $query1 = $this->db->get()->result();
        return $query1;

    }

    public function data_jenis()
    {
        $this->db->select('*');
        $this->db->from('tb_jenis_barang');
        $query1 = $this->db->get()->result();
        return $query1;
    }

    public function data_barang()
    {
        $this->db->select('*');
        $this->db->from('tb_data_barang');
        $query1 = $this->db->get()->result();
        return $query1;
    }
    public function ngedit($agung)
    {
        $this->db->select('*');
        $this->db->from('tb_jenis_barang');
        $this->db->where('kode_jenis', $agung);
        $query2 = $this->db->get()->result();
        return $query2;
    }
    public function ngedit_barang($dataBrg)
    {
        $this->db->select('*');
        $this->db->from('tb_data_barang');
        $this->db->where('kode_brg', $dataBrg);
        $query2 = $this->db->get()->result();
        return $query2;
    }

    public function diupdate()
    {
        $kode = $this->input->post('kd_brg');
        $jenis = $this->input->post('jenis');
        $jml_jenis = $this->input->post('jml_jenis');

        $_array = array(
            'nama_jenis' => $jenis,
            'jumlah_jenis' => $jml_jenis
        );
        $this->db->where('kode_jenis', $kode);
        $updatenya = $this->db->update('tb_jenis_barang', $_array);

        if ($updatenya) {
        ?> <script type="text/javascript">
                alert("berhasil diupdate");
                window.location = '../stok_barang/data_jenis';
            </script>
        <?php
        } else {
        ?> <script type="text/javascript">
                alert("gagal Diupdate");
                window.location = '../stok_barang/data_jenis';
            </script>
        <?php
        }
    }
    public function diupdate_data_brg()
    {
        $kd_brg = $this->input->post('kode_brg');
        $nama_brg = $this->input->post('nama_brg');
        $kode_jenis = $this->input->post('kode_jenis');
        $jml_brg = $this->input->post('jml_brg');
        $hrg_beli = $this->input->post('hrg_beli');
        $hrg_jual = $this->input->post('hrg_jual');
        $keterangan = $this->input->post('keterangan');

        $_array = array(
            'nama_brg' => $nama_brg,
            'kode_jenis' => $kode_jenis,
            'jml_brg' => $jml_brg,
            'hrg_beli' => $hrg_beli,
            'hrg_jual' => $hrg_jual,
            'keterangan' => $keterangan
        );
        $this->db->where('kode_brg', $kd_brg);
        $updatenya = $this->db->update('tb_data_barang', $_array);

        if ($updatenya) {
        ?> <script type="text/javascript">
                alert("berhasil diupdate");
                window.location = '../stok_barang/data_barang';
            </script>
        <?php
        } else {
        ?> <script type="text/javascript">
                alert("gagal Diupdate");
                window.location = '../stok_barang/data_barang';
            </script>
        <?php
        }
    }

    public function delete($del)
    {
        $this->db->where('kode_jenis', $del);
        $this->db->delete('tb_jenis_barang');
    }

    public function delete_brg($del)
    {
        $this->db->where('kode_brg', $del);
        $this->db->delete('tb_data_barang');
    }
    public function delete_trans($del)
    {
        $this->db->where('kode_brg', $del);
        $this->db->delete('tb_transaksi');
    }

    public function data_transaksi()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_jenis_barang',
        'tb_transaksi.jenis_barang=tb_jenis_barang.kode_jenis');
        $this->db->join('tb_data_barang',
        'tb_transaksi.kode_brg=tb_data_barang.kode_brg');
        $query1 = $this->db->get()->result();
        return $query1;
    }

    public function totale(){
        $this->db->select("*");
        $this->db->select_sum('total_hrg');
        $this->db->from('tb_transaksi');
        $query3 = $this->db->get()->result();
        return $query3;

    }
    public function update_jml_trans(){
        $kode_brg=$this->input->post('kode');
        $jumlah=$this->input->post('jml');
        $jual=$this->input->post('harga');
        $totharga=$jumlah*$jual;

        // mengecek jumlah stok di data barang
        $this->db->select('*');
        $this->db->from('tb_data_barang');
        $this->db->where('kode_brg', $kode);
        $cekstok = $this->db->get()->result();
        
        foreach($cekstok as $cek);
        $jmlstok = $cek->jml_brg;
        if ($jumlah < $jmlstok) {
            ?> <script type="text/javascript">
                    alert('stok nya kurang nih');
                    window.location = '../stok_barang/transaksi';
                </script>
            <?php
        }else{
            $agung = array(
                'jml_brg_trans'=>$jumlah,
                'total_hrg'=>$totharga
            );
    
            $this->db->where('kode_brg=', $kode_brg);
            $this->db->update('tb_transaksi',$agung);
        }

    }

    public function cari_brg()
    {
        //qbarang
        $kodedt = $this->input->post('kode_brg');
        $this->db->select('*');
        $this->db->from('tb_data_barang');
        $this->db->where('kode_brg',$kodedt);
        $qbarang = $this->db->get()->result();
        // nota
        $nota = $this->input->post('nota');
        $this->db->from('tb_detail_trans');
        $nota_get = $this->db->get()->result();
        //
        foreach ($qbarang as $data);
        $kode = $data->kode_brg;
        $nm_brg=$data->nama_brg;
        $harga=$data->hrg_jual;
        $jnsbrg=$data->kode_jenis;
        $jbrg=$data->jml_brg;
        $tgl=Date('Y-m-d');
        $kodetr=Date('Ymd');
        //
        foreach($nota_get as $datanota);
        $nomornota=@$datanota->nota;
        $not = $nomornota + 1;
        //barang
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('kode_brg=',$kodedt);
        $barang = $this->db->get()->result();
        foreach ($barang as $tbrg);
        $hit=@$tbrg->jml_brg_trans;
        $kod=@$tbrg->kode_brg;
    switch($kode){
        case $kod :
            if($hit>=$jbrg){
                ?> <script type="text/javascript">
                    alert('stok belum ada nih');
                    window.location = '../transaksi';
                </script>
            <?php
            }else{
                $tung=$hit+1;
                $_array = array('jml_brg_trans'=>$tung);
                $this->db->where('kode_brg',$kodedt);
                $updatenya=$this->db->update('tb_transaksi', $_array);
                ?> <script type="text/javascript">
                       // alert('stok belum ada nih');
                        window.location = '../transaksi';
                    </script>
                <?php
            }
            break;
        case $kode :
            $save = $this->db->query("INSERT INTO tb_transaksi(`tgl_transaksi`, `kode_transaksi`, `kode_brg`, `jenis_barang`, `jml_brg_trans`, 
            `hrg_brg`, `total_hrg`) 
            values('$tgl', '$kodetr','$kodedt', '$jnsbrg', '1', '$harga', '$harga')");
             
            if ($save) {
                ?> <script type="text/javascript">
                        window.location = '../transaksi';
                    </script>
                <?php
                }
            break;
    }
    }

    public function detail_tr(){
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $trans = $this->db->get()->result();
        foreach($trans as $det){
            echo $det->kode_brg;
            $save = $this->db->query("INSERT INTO 
            tb_detail_trans(`tgl_transaksi`, `nota`, `kode_transaksi`, `kode_brg`, 
            `jenis_barang`, `jmlbrg`, `harga_brg`, `total_hrg`)
            values(
                '$det->tgl_transaksi',
                '$det->kode_transaksi',
                '$det->kode_transaksi',
                '$det->kode_brg',
                '$det->jenis_barang',
                '$det->jml_brg_trans',
                '$det->hrg_brg',
                '$det->total_hrg'
                )");
            $this->db->select('*');
            $this->db->from('tb_detail_trans');
            $this->db->where('kode_brg', $det->kode_brg);
            $det_trans = $this->db->get()->result();
            //
            foreach($det_trans as $jml );
            $this->db->select('*');
            $this->db->from('tb_data_barang');
            $this->db->where('kode_brg', $det->kode_brg);
            $dbrg = $this->db->get()->result();
            //
            foreach($dbrg as $jmlkurang );
            $hitung=($jmlkurang->jml_brg) - ($trans->jml_brg_trans);
            echo($hitung);
            $_array =array('jml_brg' => $hitung);
            $this->db->where('kode_brg', $det->kode_brg);
            $updatenya=$this->db->update('tb_data_barang',$_array);
            if($save){
                $this->db->truncate('tb_transaksi');
                ?> <script type="text/javascript">
                        window.location = '../transaksi';
                    </script>
                <?php
            }
            
        }
    }


    public function chekout()
    {
        $this->db->select('*');
        $this->db->from('tb_data_barang');
        $this->db->join('tb_transaksi',
        'tb_data_barang.nama_brg=tb_transaksi.kode_transaksi');
        $query1 = $this->db->get()->result();
        return $query1;
    }
    public function Bayar()
    {
        $this->db->query('delete from tb_transaksi where tb_transaksi.kode_transaksi');
    }
    
    public function data_not(){
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $query = $this->db->get()->result();
        return $query;
    }
    public function data_detail_not(){
        $this->db->select('*');
        $this->db->from('tb_detail_trans');
        $query = $this->db->get()->result();
        return $query;
    }
    public function cari_tanggal(){
        $d = $this->input->post('cari_tgl');
        $this->db->select('*');
        $this->db->from('tb_detail_trans');
        $this->db->join('tb_jenis_barang',
        'tb_detail_trans.jenis_barang=tb_jenis_barang.kode_jenis');
        $this->db->join('tb_data_barang',
        'tb_detail_trans.kode_brg=tb_data_barang.kode_brg');
        $query = $this->db->get()->result();
        return $query;
    }

}
