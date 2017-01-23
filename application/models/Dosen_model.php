<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model
{

    function count_dosen()
    {
        return $this->db->get('tbl_dosen');
    }

    function index_dosen($halaman,$batas)
    {
        $query = "SELECT * FROM tbl_dosen ORDER BY id_dosen DESC limit $halaman, $batas";
        return $this->db->query($query);
    }


    function count_berita()
    {
        return $this->db->get('tbl_berita');
    }

    function index_berita($halaman,$batas)
    {
        $query = "SELECT * FROM tbl_berita ORDER BY id_berita DESC limit $halaman, $batas";
        return $this->db->query($query);
    }  

    function edit_berita($id_berita)
    {
        $id_berita  =  array('id_berita'=> $id_berita);
        return $this->db->get_where('tbl_berita',$id_berita);
    }  


    function edit_dosen($id_dosen)
    {
        $id_dosen  =  array('id_dosen'=> $id_dosen);
        return $this->db->get_where('tbl_dosen',$id_dosen);
    }

    function admin_id()
    {
        return $this->session->userdata('id_admin');
    }

    function check_all($table,$field1,$field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    } 
    
    function get_berita($page)
    {
        $offset = 8 * $page;
        $limit  = 8;
        $query  = "SELECT * FROM tbl_berita ORDER BY id_berita DESC limit $offset ,$limit";
        $result = $this->db->query($query)->result();
        return $result;
    }  

    function detail_berita($slug)
    {
        $query = $this->db->query("SELECT * FROM tbl_berita WHERE slug = '$slug'");

        if($query->num_rows() > 0)
        {
            return $query->row();
        }else
        {
            return NULL;
        }
    }             

    function logout()
    {
        $this->session->sess_destroy();
    }


}