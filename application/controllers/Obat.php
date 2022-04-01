<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Obat extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('Obat_model');
        } 

        function insert_obat_keluar(){
            $jns_transaksi = $this->input->post('jns_transaksi');
            $no_transaksi = $this->input->post('no_transaksi');
            $nama_pasien = $this->input->post('nama_pasien');
            $jns_pasien = $this->input->post('jns_pasien');
            $tgl_transaksi = $this->input->post('tgl_transaksi');
            $waktu_transaksi = $this->input->post('waktu_transaksi');
            $id_obat = $this->input->post('id_obat');
            $nama_obat = $this->input->post('nama_obat');
            $dosis_obat = $this->input->post('dosis_obat');
            $jumlah_obat = $this->input->post('jumlah_obat');
            $satuan_obat = $this->input->post('satuan_obat');

            $data = array(
                'jns_transaksi' => $jns_transaksi,
                'no_transaksi' => $no_transaksi,
                'nama_pasien' => $nama_pasien,
                'jns_pasien' => $jns_pasien,
                'tgl_transaksi' => $tgl_transaksi,
                'waktu_transaksi' => $waktu_transaksi,
                'id_obat' => $id_obat,
                'nama_obat' => $nama_obat,
                'dosis_obat' => $dosis_obat,
                'jumlah_obat' => $jumlah_obat,
                'satuan_obat' => $satuan_obat
            );
            $this->Obat_model->insert_obat($data, 'daftar_keluar');
            redirect('dashboard/obat_keluar');
        }
        function insert_obat_masuk(){
            $jns_transaksi = $this->input->post('jns_transaksi');
            $no_transaksi = $this->input->post('no_transaksi');
            $no_faktur = $this->input->post('no_faktur');
            $no_batch = $this->input->post('no_batch');
            $nama_vendor = $this->input->post('nama_vendor');
            $tgl_transaksi = $this->input->post('tgl_transaksi');
            $waktu_transaksi = $this->input->post('waktu_transaksi');
            $id_obat = $this->input->post('id_obat');
            $nama_obat = $this->input->post('nama_obat');
            $dosis_obat = $this->input->post('dosis_obat');
            $jumlah_obat = $this->input->post('jumlah_obat');
            $satuan_obat = $this->input->post('satuan_obat');

            $data = array(
                'jns_transaksi' => $jns_transaksi,
                'no_transaksi' => $no_transaksi,
                'no_faktur' => $no_faktur,
                'no_batch' => $no_batch,
                'nama_vendor' => $nama_vendor,
                'tgl_transaksi' => $tgl_transaksi,
                'waktu_transaksi' => $waktu_transaksi,
                'id_obat' => $id_obat,
                'nama_obat' => $nama_obat,
                'dosis_obat' => $dosis_obat,
                'jumlah_obat' => $jumlah_obat,
                'satuan_obat' => $satuan_obat
            );
            $this->Obat_model->insert_obat($data, 'daftar_masuk');
            redirect('dashboard/obat_masuk');
        }

        function print_daftar_obat_masuk(){
            
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            
            $data['query'] = $this->Obat_model->filter_daftar_masuk($mulaitgl,$sampaitgl);
            // $data['query'] = $this->Obat_model->filter_daftar_masuk_bulanini($mulaitgl);
            $data['mulaitgl'] = $mulaitgl;
            $data['sampaitgl'] = $sampaitgl;    

            $this->load->view('print/print_daftar_obat_masuk',$data);
        }
        
        function print_daftar_obat_keluar(){
            
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            
            $data['query'] = $this->Obat_model->filter_daftar_keluar($mulaitgl,$sampaitgl);
            // $data['query'] = $this->Obat_model->filter_daftar_keluar_bulanini($mulaitgl);
            $data['mulaitgl'] = $mulaitgl;
            $data['sampaitgl'] = $sampaitgl;    

            $this->load->view('print/print_daftar_obat_keluar',$data);
        }
    }

?>