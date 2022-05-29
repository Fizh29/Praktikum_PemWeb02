<?php
class Mahasiswa_model extends CI_Model
{
    private $tabel = 'mahasiswa';
    public function getAll(){
        $query = $this->db->get($this->tabel);
        return $query->result();
    }
}
?>
