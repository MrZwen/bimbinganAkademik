<?php 
class Criwayat extends CI_Controller
{
    function RiwayatK()
    {
        $data['konten'] = $this->load->view('Kaprodi/riwayat', '', TRUE);
        $this->load->view('Kaprodi/tampilanKaprodi', $data);
    }
}

?>