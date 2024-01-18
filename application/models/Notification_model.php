<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends CI_Model {
    public function get_notifications() {
        // Gantilah 'notifications' dengan nama tabel notifikasi di database Anda
        return $this->db->get('tbl_surat_masuk')->result();
    }

    public function get_surat_keluar() {
        // Gantilah 'notifications' dengan nama tabel notifikasi di database Anda
        return $this->db->get('tbl_surat_keluar')->result();
    }

    public function get_disposisi() {
        // Gantilah 'notifications' dengan nama tabel notifikasi di database Anda
        return $this->db->get('tbl_disposisi')->result();
    }

    public function count_surat_masuk() {
        return $this->db->count_all_results('tbl_surat_masuk');
    }

    public function count_surat_keluar() {
        return $this->db->count_all_results('tbl_surat_keluar');
    }

    public function count_disposisi() {
        return $this->db->count_all_results('tbl_disposisi');
    }
    

    public function masuk($notification_id) {
        // Gantilah 'notifications' dengan nama tabel notifikasi di database Anda
        $this->db->where('id_surat_masuk', $notification_id);
        $this->db->update('tbl_surat_masuk', array('dibaca' => 1));
    }

    public function keluar($notification_id) {
        // Gantilah 'notifications' dengan nama tabel notifikasi di database Anda
        $this->db->where('id_surat_keluar', $notification_id);
        $this->db->update('tbl_surat_keluar', array('dibaca' => 1));
    }

    public function disposisi($notification_id) {
        // Gantilah 'notifications' dengan nama tabel notifikasi di database Anda
        $this->db->where('id_disposisi', $notification_id);
        $this->db->update('tbl_disposisi', array('dibaca' => 1));
    }
}
