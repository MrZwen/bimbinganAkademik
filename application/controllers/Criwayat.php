<?php 
class Criwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mriwayat');
        $this->load->library('pdf_report');

    }
    function RiwayatK()
    {
        $datalist['hasil'] = $this->mriwayat->riwayatK();
        $data['konten'] = $this->load->view('Kaprodi/riwayat', $datalist, TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }

    function riwayatD() {
        $datalist['hasil']=$this->mriwayat->riwayatD(); 
        $data['konten'] = $this->load->view('Dosen/riwayatDosen',$datalist, TRUE);
        $this->load->view('Dosen/tampilanDosen', $data);
    }

    function RiwayatM()
    {
        $datalist['hasil']=$this->mriwayat->riwayatM(); 
        $data['konten'] = $this->load->view('Mahasiswa/riwayatMahasiswa', $datalist , TRUE);
        $this->load->view('Mahasiswa/tampilanMahasiswa', $data);
    }

    function pdf()
    {
        $this->load->view('Dosen/laporanpdf');
    }

}
?>