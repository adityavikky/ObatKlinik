<?php
    class Obat_model extends CI_Model
    {
        function cek_stok_obat($criteria='', $order='',$limit='', $offset=0){
            $this->db->select('*');
            $this->db->from('stokobat');
            if ($criteria != '') 
                $this->db->where($criteria);

            if ($order != 'nama_obat'.'ASC') 
                $this->db->order_by($order);
            
            if ($limit != '') 
                $this->db->limit($limit, $offset);

            $query = $this->db->get();

            return $query;
            
        }

        function cek_kat_obat($criteria='', $order='',$limit='', $offset=0){
            $this->db->select('*');
            $this->db->from('kate_obat');
            if ($criteria != '') 
                $this->db->where($criteria);

            if ($order != 'kategori_obat'.'ASC') 
                $this->db->order_by($order);
            
            if ($limit != '') 
                $this->db->limit($limit, $offset);

            $query = $this->db->get();

            return $query;
            
        }
        function cek_sat_obat($criteria='', $order='',$limit='', $offset=0){
            $this->db->select('*');
            $this->db->from('satu_obat');
            if ($criteria != '') 
                $this->db->where($criteria);

            if ($order != 'satuan_obat'.'ASC') 
                $this->db->order_by($order);
            
            if ($limit != '') 
                $this->db->limit($limit, $offset);

            $query = $this->db->get();

            return $query;
            
        }
        function insert_obat($data, $table){
            $this->db->insert($table, $data);
        }

        function update_by_id($data, $id){
            $this->db->where("id = '$id'");
            $query = $this->db->update('stokobat', $data);
            return $query;
        }

        function delete_by_id($id){
            $query = $this->db->delete('stokobat', "id = '$id'");
            return $query;
        }

        function getkatobat(){
            $query = $this->db->query("SELECT * FROM kate_obat ORDER BY kategori_obat ASC");
            return $query->result();
        }
        function getnamaobat($kategori_obat){
            $query = $this->db->query("SELECT * FROM stokobat WHERE kategori_obat = '$kategori_obat' ORDER BY kategori_obat ASC");
            return $query->result();
        }
        function getdosisobat($nama_obat) {
            $query = $this->db->query("SELECT * FROM stokobat WHERE nama_obat = '$nama_obat' ORDER BY nama_obat ASC");
            return $query->result();
        }

        
        function search_obat($title){
            $this->db->like('nama_obat', $title);
            $this->db->order_by('nama_obat', 'ASC');
            $this->db->limit(10);
            return $this->db->get('stokobat')->result();
            
        }
        
        function insert_data_obat($data, $table){
            $this->db->insert($table, $data);
        }

        function cek_daftar_keluar($criteria='', $order='',$limit='', $offset=0){
            $this->db->select('*');
            $this->db->from('daftar_keluar');
            if ($criteria != '') 
                $this->db->where($criteria);

            if ($order != 'DESC') 
                $this->db->order_by('tgl_transaksi',$order);
            
            if ($limit != '') 
                $this->db->limit($limit, $offset);

            $query = $this->db->get();

            return $query;
            
        }

        function cek_daftar_masuk($criteria='', $order='',$limit='', $offset=0){
            $this->db->select('*');
            $this->db->from('daftar_masuk');
            if ($criteria != '') 
                $this->db->where($criteria);

            if ($order != 'ASC') 
                $this->db->order_by($order);
            
            if ($limit != '') 
                $this->db->limit($limit, $offset);

            $query = $this->db->get();

            return $query;
            
        }

        function filter_daftar_masuk($mulaitgl, $sampaitgl){
            // $query = $this->db->query("SELECT * FROM daftar_masuk WHERE tgl_transaksi BETWEEN $mulaitgl AND $sampaitgl");

            $query = $this->db->query("SELECT * FROM daftar_masuk WHERE tgl_transaksi BETWEEN CAST('$mulaitgl' AS DATE) AND CAST('$sampaitgl' AS DATE)");

            return $query;
            
        }

        function filter_daftar_masuk_bulanini($bulanini){
            // $query = $this->db->query("SELECT * FROM daftar_masuk WHERE tgl_transaksi BETWEEN $mulaitgl AND $sampaitgl");

            $query = $this->db->query("SELECT * FROM daftar_masuk WHERE tgl_transaksi LIKE '$bulanini%'");

            return $query;
            
        }
        function filter_daftar_keluar($mulaitgl, $sampaitgl){
            // $query = $this->db->query("SELECT * FROM daftar_masuk WHERE tgl_transaksi BETWEEN $mulaitgl AND $sampaitgl");
            
            $query = $this->db->query("SELECT * FROM daftar_keluar WHERE tgl_transaksi BETWEEN CAST('$mulaitgl' AS DATE) AND CAST('$sampaitgl' AS DATE)");
            
            return $query;
            
        }
        function filter_daftar_keluar_bulanini($bulanini){
            // $query = $this->db->query("SELECT * FROM daftar_masuk WHERE tgl_transaksi BETWEEN $mulaitgl AND $sampaitgl");

            $query = $this->db->query("SELECT * FROM daftar_keluar WHERE tgl_transaksi LIKE '$bulanini%'");

            return $query;
            
        }
        function cari_stok_obat($cari_stok){

            $query = $this->db->query("SELECT * FROM stokobat WHERE nama_obat='$cari_stok' ");

            return $query;
            
        }

        function input_kategori_obat($data, $table){
            $this->db->insert($table, $data);
        }
        function edit_kategori($where, $table){
            return $this->db->get_where($table, $where);
        }

        function update_kategori($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        function hapus_kategori($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        function edit_obat($where, $table){
            return $this->db->get_where($table, $where);
        }

        function update_obat($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        function hapus_obat($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        // function getObat($postData){
        //     $response = array();
        //     if($postData['search']){
        //         $this->db->select('*');
        //         $this->db->where('nama_obat like "%'.$postData['search'].'%"');
        //         $records = $this->db->get('obatobat')->result();

        //         foreach($records as $row){
        //             $response[] = array(
        //                 "nama_obat" => $row->nama_obat,
        //                 "dosis_obat" => $row->dosis_obat,
        //                 "satuan_obat" => $row->satuan_obat
        //             );
        //         }
        //     }
        //     return $response;
        // }
    }
    
?>