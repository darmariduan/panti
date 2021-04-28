<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GetKomunitas_model extends CI_Model
{
    public function getKomunitas()
    {
        return $this->db->get('profile')->row();
    }

    // get data by id
    public function get_by_id($id)
    {
        $this->db->where('id_berita', $id);
        return $this->db->get('tbl_berita')->row();
    }

    public function imgDash()
    {
        $this->db->select('*');
        $this->db->from('imgdashboard');

        return $this->db->get();
    }

    public function showProvinsi($idProvinsi = null)
    {
        if ($idProvinsi != null) {
            $isi = $this->db->where("id = '$idProvinsi'")->get('wilayah_provinsi')->result();
            if ($isi) {
                foreach ($isi as $key) {
                    $nas = $key->nama;
                }
            } else {
                $nas = '(Kosong)';
            }
        } else {
            $nas = '(Kosong)';
        }
        return $nas;
    }

    public function showKabupaten($idKabupaten = null)
    {
        if ($idKabupaten != null) {
            $isi = $this->db->where("id = '$idKabupaten'")->get('wilayah_kabupaten')->result();
            if ($isi) {
                foreach ($isi as $key) {
                    $nas = $key->nama;
                }
            } else {
                $nas = '(Kosong)';
            }
        } else {
            $nas = '(Kosong)';
        }
        return $nas;
    }

    public function showKecamatan($idKecamatan = null)
    {
        if ($idKecamatan != null) {
            $isi = $this->db->where("id = '$idKecamatan'")->get('wilayah_kecamatan')->result();
            if ($isi) {
                foreach ($isi as $key) {
                    $nas = $key->nama;
                }
            } else {
                $nas = '(Kosong)';
            }
        } else {
            $nas = '(Kosong)';
        }
        return $nas;
    }

    public function showDesa($idDesa = null)
    {
        if ($idDesa != null) {
            $isi = $this->db->where("id = '$idDesa'")->get('wilayah_desa')->result();
            if ($isi) {
                foreach ($isi as $key) {
                    $nas = $key->nama;
                }
            } else {
                $nas = '(Kosong)';
            }
        } else {
            $nas = '(Kosong)';
        }
        return $nas;
    }

    public function getProv($id = null)
    {
        $query = $this->db->where('id', $id)->get('wilayah_provinsi')->row();
        return ($query) ? $query->nama : '';
    }

    public function getKab($id = null)
    {
        $query = $this->db->where('id', $id)->get('wilayah_kabupaten')->row();
        return ($query) ? $query->nama : '';
    }

    public function getKec($id = null)
    {
        $query = $this->db->where('id', $id)->get('wilayah_kecamatan')->row();
        return ($query) ? $query->nama : '';
    }

    public function getDes($id = null)
    {
        $query = $this->db->where('id', $id)->get('wilayah_desa')->row();
        return ($query) ? $query->nama : '';
    }

    // Menu
    public function getmenu()
    {
        $this->db->select('*');
        $this->db->from('menu');
        $query = $this->db->get();
        return $query;
    }

    // get data by id
    public function get_by_id_menu($id)
    {
        $this->db->where('id_menu', $id);
        return $this->db->get('menu')->row();
    }

    //Get data News From database
    public function get_news_list($limit, $start)
    {
        $query = $this->db->get('tbl_berita', $limit, $start);
        return $query;
    }

    // View Donasi
    public function viewDonasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_donasi');
        $this->db->where('tbl_donasi.status', 2);
        $this->db->join('users', 'tbl_donasi.nama_donatur=users.id', 'LEFT');
        $this->db->order_by('tbl_donasi.id', 'DESC');
        $this->db->limit('10');
        $query  = $this->db->get();

        return $query;
    }

    // View Anak Asuh
    public function getAnak()
    {
        $this->db->select('*');
        $this->db->from('tbl_anakasuh');
        $query = $this->db->get();

        return $query;
    }
}
