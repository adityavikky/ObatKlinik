<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboard extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('Obat_model');

            if($this->session->userdata('status') != "login"){
                redirect(base_url("index.php/login"));
            }
        }

        function index(){
            $this->load->view('template/header');
            $this->load->view('index');
            $this->load->view('template/footer');

        }

        function stok_obat(){
            $data['query'] = $this->Obat_model->cek_stok_obat();
            $this->load->view('template/header');
            $this->load->view('menu_obat/stok_obat_v',$data);
            $this->load->view('template/footer');
        }
        function rekap_obat(){
            $data['query'] = $this->Obat_model->cek_stok_obat();
            $this->load->view('template/header');
            $this->load->view('menu_obat/rekap_obat_v',$data);
            $this->load->view('template/footer');
        }

        function input_obat(){
            $data['kategori']  = $this->Obat_model->cek_kat_obat();
            $data['satuan']  = $this->Obat_model->cek_sat_obat();

            $this->load->view('template/header');
            $this->load->view('menu_obat/input_obat_v', $data);
            $this->load->view('template/footer');            
        }

        function insert_obat(){
            $kategori_obat = $this->input->post('kategori_obat');
            $nama_obat = $this->input->post('nama_obat');
            $dosis_obat = $this->input->post('dosis_obat');
            $satuan_obat = $this->input->post('satuan_obat');

            $data = array(
                'kategori_obat' => $kategori_obat,
                'nama_obat' => $nama_obat,
                'dosis_obat' => $dosis_obat,
                'satuan_obat' => $satuan_obat
            );
            $this->Obat_model->insert_data_obat($data, 'stokobat');
            redirect('dashboard/input_obat');
        }
        function obat_masuk(){
            // $getdata = $this->Obat_model->getkatobat();
            // $data['kategori'] = $getdata;
            $this->load->view('template/header');
            $this->load->view('menu_obat/coba_obat_masuk_v');
            $this->load->view('template/footer');
        }

        function getdatanamaobat(){
            $kategori_obat = $this->input->post('katobat');
            $getnamaobat = $this->Obat_model->getnamaobat($kategori_obat);


            // var_dump($getnamaobat);
            echo json_encode($getnamaobat);
        }
        function getdatadosisobat(){
            $nama_obat = $this->input->post('namaobat');
            $getdosisobat = $this->Obat_model->getdosisobat($nama_obat);


            // var_dump($getnamaobat);
            echo json_encode($getdosisobat);
        }

        function daftar_obat_masuk(){
            // $json = file_get_contents("./assets/MOCK_DATA.json");
            // $obj  = json_decode($json);
            // $data = array(
            //     'list_data' => $obj
            // );

            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');

            $data['mulaitgl'] = $mulaitgl;
            $data['sampaitgl'] = $sampaitgl;
            // die($mulaitgl." - ".$sampaitgl);
            $data['query'] = $this->Obat_model->cek_daftar_masuk();
            // $daftar = $this->Obat_model->cek_daftar_masuk($mulaitgl,$sampaitgl);
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_masuk_v',$data);
            $this->load->view('template/footer');
        }

        function filter_daftar_masuk(){
            
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            $data['mulaitgl'] = $mulaitgl;
            $data['sampaitgl'] = $sampaitgl;
            
            $daftar = $this->Obat_model->filter_daftar_masuk($mulaitgl,$sampaitgl);
            $data['query'] = $this->Obat_model->filter_daftar_masuk($mulaitgl,$sampaitgl);

            
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_masuk_v',$data);
            $this->load->view('template/footer');
        }

        function filter_daftar_masuk_hariini(){
            
            $hariini = $this->input->get('hariini');
        
            $data['query'] = $this->Obat_model->filter_daftar_masuk($hariini,$hariini);
            $data['mulaitgl'] = $hariini;
            $data['sampaitgl'] = $hariini;
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_masuk_v',$data);
            $this->load->view('template/footer');
        }

        function filter_daftar_masuk_bulanini(){
            
            $bulanini = $this->input->get('bulanini');
            
            $data['query'] = $this->Obat_model->filter_daftar_masuk_bulanini($bulanini);
            $data['mulaitgl'] = $bulanini;
            $data['sampaitgl'] = $bulanini;
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_masuk_v',$data);
            $this->load->view('template/footer');
        }
        
        function obat_keluar(){
            
            // $getdata = $this->Obat_model->getkatobat();
            // $data['kategori'] = $getdata;
            $this->load->view('template/header');
            $this->load->view('menu_obat/coba_obat_keluar_v');
            $this->load->view('template/footer');
        }

        function daftar_obat_keluar(){
            
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');

            $data['mulaitgl'] = $mulaitgl;
            $data['sampaitgl'] = $sampaitgl;

            $data['query'] = $this->Obat_model->cek_daftar_keluar();
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_keluar_v',$data);
            $this->load->view('template/footer');
        }
        
        function filter_daftar_keluar(){
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            $data['mulaitgl'] = $mulaitgl;
            $data['sampaitgl'] = $sampaitgl;
            
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            
            $daftar = $this->Obat_model->filter_daftar_keluar($mulaitgl,$sampaitgl);
            $data['query'] = $this->Obat_model->filter_daftar_keluar($mulaitgl,$sampaitgl);
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_keluar_v',$data);
            $this->load->view('template/footer');
        }

        function filter_daftar_keluar_hariini(){
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            
            $hariini = $this->input->get('hariini');
            
            $data['query'] = $this->Obat_model->filter_daftar_keluar($hariini,$hariini);
            $data['mulaitgl'] = $hariini;
            $data['sampaitgl'] = $hariini;
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_keluar_v',$data);
            $this->load->view('template/footer');
        }

        function filter_daftar_keluar_bulanini(){
            $mulaitgl = $this->input->get('mulaitgl');
            $sampaitgl = $this->input->get('sampaitgl');
            
            $bulanini = $this->input->get('bulanini');
            
            $data['query'] = $this->Obat_model->filter_daftar_keluar_bulanini($bulanini);
            $data['mulaitgl'] = $bulanini;
            $data['sampaitgl'] = $bulanini;
            $this->load->view('template/header');
            $this->load->view('menu_obat/daftar_obat_keluar_v',$data);
            $this->load->view('template/footer');
        }

        function cari_stok_obat(){
            
            $cari_stok = $this->input->get('cari_stok_obat');
            
            $data['query'] = $this->Obat_model->cari_stok_obat($cari_stok);
            $this->load->view('template/header');
            $this->load->view('menu_obat/stok_obat_v',$data);
            $this->load->view('template/footer');
        }

        function cari_stok_master_obat(){
            
            $cari_stok = $this->input->get('cari_stok_obat');
            
            $data['query'] = $this->Obat_model->cari_stok_obat($cari_stok);
            $this->load->view('template/header');
            $this->load->view('menu_obat/pengaturan_obat_v',$data);
            $this->load->view('template/footer');
        }

        // function edit_obat($kode_obat){
        //     $this->load->view('template/header');
        //     $data['query'] = $this->Obat_model->cek_stok_obat("kode_obat = '$kode_obat'");
        //     $data['kategori'] = $this->Obat_model->cek_kat_obat();
        //     $data['satuan'] = $this->Obat_model->cek_sat_obat();
        //     $this->data['is_update'] = 1;
        //     $this->load->view('menu_obat/edit_obat_v', $data);
        //     $this->load->view('template/footer');
        // }


        function detail_informasi_obat($kode_obat){
            $this->load->view('template/header');
            $data['query'] = $this->Obat_model->cek_stok_obat("kode_obat = '$kode_obat'");
            $data['kategori'] = $this->Obat_model->cek_kat_obat();
            $data['satuan'] = $this->Obat_model->cek_sat_obat();
            $this->data['is_update'] = 1;
            $this->load->view('menu_obat/detail_obat_v', $data);
            $this->load->view('template/footer');
        }


        function pengaturan_obat(){
            
            $data['query'] = $this->Obat_model->cek_stok_obat();
            $this->load->view('template/header');
            $this->load->view('menu_obat/pengaturan_obat_v', $data);
            $this->load->view('template/footer');
        }

        function tambah_kategori(){
            $data['kategori'] = $this->Obat_model->cek_kat_obat();
            $this->load->view('template/header');
            $this->load->view('menu_obat/tambah_kategori_obat_v',$data);
            $this->load->view('template/footer');
        }

        function edit_kategori($id_kategori){
            $where = array('id_kategori'=>$id_kategori);
            $data['kategori_obat'] = $this->Obat_model->edit_kategori($where, 'kate_obat')->result();
            $this->load->view('template/header');
            $this->load->view('menu_obat/edit_kategori_obat_v',$data);
            $this->load->view('template/footer');
        }

        function update_kategori(){
            $id_kategori = $this->input->post('id_kategori');
            $kategori_obat = $this->input->post('kategori_obat');

            $data = array(
                'kategori_obat'=> $kategori_obat
            );
            $where = array(
                'id_kategori' => $id_kategori
            );
            $this->Obat_model->update_kategori($where, $data,'kate_obat');
            redirect('dashboard/tambah_kategori');
        }

        function tambah_kategori_aksi(){
            $kategori_obat = $this->input->post('kategori_obat');

            $data = array(
                'kategori_obat' => $kategori_obat
            );
            $this->Obat_model->input_kategori_obat($data, 'kate_obat');
            redirect('dashboard/tambah_kategori');
        }

        function hapus_kategori($id_kategori){
            $where = array('id_kategori' => $id_kategori);
            $this->Obat_model->hapus_kategori($where, 'kate_obat');
            redirect('dashboard/tambah_kategori');
        }
        // Funcgsi Pengaturan Obat
        function atur_obat(){
            $data['obat'] = $this->Obat_model->cek_stok_obat();
            $this->load->view('template/header');
            $this->load->view('menu_obat/edit_obat_v',$data);
            $this->load->view('template/footer');
        }

        function edit_obat($id_obat){
            $where = array('id_obat'=>$id_obat);
            $data['obat'] = $this->Obat_model->edit_obat($where, 'stokobat')->result();
            $data['kategori'] = $this->Obat_model->cek_kat_obat();
            $data['satuan'] = $this->Obat_model->cek_sat_obat();
            $this->load->view('template/header');
            $this->load->view('menu_obat/edit_detail_obat_v',$data);
            $this->load->view('template/footer');
        }

        function obat_update(){
            $id_obat = $this->input->post('id_obat');
            $kategori_obat = $this->input->post('kategori_obat');
            $nama_obat = $this->input->post('nama_obat');
            $dosis_obat = $this->input->post('dosis_obat');
            $satuan_obat = $this->input->post('satuan_obat');

            // echo $id_obat;
            // echo $nama_obat;
            // echo $kategori_obat;
            // echo $dosis_obat;
            // echo $satuan_obat;

            $data = array(
                'kategori_obat'=> $kategori_obat,
                'nama_obat'=> $nama_obat,
                'dosis_obat'=> $dosis_obat,
                'satuan_obat'=> $satuan_obat
            );
            
            $where = array(
                'id_obat' => $id_obat
            );
            $this->Obat_model->update_obat($where, $data,'stokobat');
            redirect('dashboard/atur_obat');
        }


        function hapus_obat($id_obat){
            $where = array('id_obat' => $id_obat);
            $this->Obat_model->hapus_obat($where, 'stokobat');
            redirect('dashboard/atur_obat');
        }

        // function save_input_obat($is_update=0){
        //     $data['kategori_obat'] = $this->input->post('kategori_obat', true);
        //     $data['nama_obat'] = $this->input->post('nama_obat', true);
        //     $data['dosis_obat'] = $this->input->post('dosis_obat', true);
        //     $data['satuan_obat'] = $this->input->post('satuan_obat', true);

        //     if ($is_update==0){
        //         if ($this->Obat_model->insert($data))
        //         # Harus redirect cek di modul 
        //         redirect('dashboard');
        //     } else {
        //         $kode_obat = $this->input->post('kode_obat');
        //         if ($this->Obat_model->update_by_id($data, $kode_obat))
        //             redirect('dashboard');
        //     }

        // }

        function autofillobat(){
            if (isset($_GET['term'])) {
                $result = $this->Obat_model->search_obat($_GET['term']);
                // echo $result;
                if (count ($result) > 0){
                    foreach ($result as $row)
                    
                        // $arr_result[] = $row ->nama_obat;
                        $arr_result[] = array(

		                    'label'     => $row->nama_obat,
		                    'id_obat'     => $row->id_obat,
		                    'dosis_obat'    => $row->dosis_obat,
		                    'satuan_obat'   => $row->satuan_obat);

                            echo json_encode($arr_result);
                }
            }
        }


        // public function obatlist(){
        //     $postData = $this->input->post();
        //     $data = $this->Obat_model->getObat($postData);

        //     echo json_encode($data);
        // }


    }
    
?>