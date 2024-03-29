<?php  
class Mgroup extends CI_Model{
    public function tampilGroup()
{
    // Query untuk mengambil data dari tabel 'group_bimbingan'
    $query1 = $this->db->select('mahasiswa.*, dosen.*, group_bimbingan.*')
        ->from('group_bimbingan')
        ->join('dosen', 'dosen.nid = group_bimbingan.nid')
        ->join('mahasiswa', 'mahasiswa.nim = group_bimbingan.nim')
        ->get();

    if ($query1->num_rows() > 0) {
        $hasil = $query1->result();
    } else {
        $hasil = [];
    }
    return $hasil;
}

function tampiltahun (){
    $query = $this->db->select('*')
    ->from('tahunAjaran')
    ->get();



if ($query->num_rows() > 0) {
    $hasil1 = $query->result();
} else {
    $hasil1 = [];
}
return $hasil1;
}

    function tambahmahasiswa()
    {
        $data = $_POST;
        $this->db->insert('group_bimbingan', $data);
        $this->session->set_flashdata('pesan', 'Data sudah disimpan');
        redirect('cgroup/GroupBimbingan', 'refresh');
    }

    public function tampilGroupD()
    {
        $id_akun = $this->session->userdata('id_akun');
        $query = $this->db->select('*')
				->from('group_bimbingan')
				->join('dosen', 'dosen.nid = group_bimbingan.nid')
                ->join('mahasiswa', 'mahasiswa.nim = group_bimbingan.nim')
                ->where('dosen.id_akun', $id_akun) 
				->get();
        if($query->num_rows() > 0){
            $hasil = $query->result();
        }else{
            $hasil = [];
        }
        return $hasil;
    }

    function hapusdata($id_group)
    {
        $this->db->where('id_group', $id_group);
        $this->db->delete('group_bimbingan');
        $this->session->set_flashdata('pesan', 'Data sudah dihapus');
        redirect('cgroup/GroupBimbingan', 'refresh');
    }
}
