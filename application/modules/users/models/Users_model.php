<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function allMessages()
    {
        $messages = $this->db->get('message');
        if ($messages->num_rows() > 0) {
            return $messages->num_rows();
        } else {
            return 0;
        }
    }

    // View Messages
    public function getdata()
    {
        $this->db->select('message.id AS id,
		message.content AS content,
		a1.nama_admin AS from_users,
		a2.nama_admin AS to_admin,
		message.date AS date
		');
        $this->db->from('message');
        $this->db->join('users a1', 'message.from_users=a1.id', 'inner');
        $this->db->join('users a2', 'message.to_admin=a2.id', 'inner');
        $this->db->where('from_users', $this->session->userdata('id'));
        $this->db->or_where('to_admin', $this->session->userdata('id'));
        $this->db->order_by('message.date', 'DESC');
        $this->db->limit(10);

        $query = $this->db->get();
        return $query;
    }

    // Insert Message
    public function insert_messages($input)
    {
        return $this->db->insert('message', $input);
    }

    // View Users
    public function view()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query;
    }

    // View Announcement
    public function getmessage()
    {
        $this->db->select('*');
        $this->db->from('announcement');
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    // Bukti Donasi
    public function hassert()
    {
        $this->db->select('*');
        $this->db->from('files');
        $this->db->where('uploaded_to', $this->session->userdata('id'));
        $this->db->order_by('uploaded_at', 'DESC');
        $this->db->limit('1');
        $query = $this->db->get();

        return $query;
    }

    // View Donasi
    public function viewDonasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_donasi');
        $this->db->join('users', 'tbl_donasi.nama_donatur=users.id', 'LEFT');
        $this->db->where('tbl_donasi.nama_donatur', $this->session->userdata('id'));
        $this->db->where('tbl_donasi.status', '2');
        $query = $this->db->get();

        return $query;
    }
    
    // Insert Donasi
    public function insert_donasi($input)
    {
        return $this->db->insert('tbl_donasi', $input);
    }
}
