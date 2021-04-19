<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class LaporanDompdf extends CI_Controller {
 
    public function index()
    {
        $data['siswa'] = $this->db->get('t_siswa')->result();
 
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Laporan-data-siswa.pdf";
        $this->pdf->load_view('v_tampil', $data);
    }
}
