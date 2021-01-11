<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_m extends CI_Model
{
    private $table = "pengajuan";
    public $id_pengajuan = "";
    public $anggota_id = "";
    public $stat_pengajuan_id = "";
    public $jumlah_pinjam = "";
    public $jumlah_cicilan = "";
    public $tenor = "";
    public $tanggal_ajuan = "";

    public function transform($object)
    {
        $pengajuan = new Pengajuan_m();
        $pengajuan->id_pengajuan = $object->id_pengajuan;
        $pengajuan->anggota_id = $object->anggota_id;
        $pengajuan->stat_pengajuan_id = $object->stat_pengajuan_id;
        $pengajuan->jumlah_pinjam = $object->jumlah_pinjam;
        $pengajuan->jumlah_cicilan = $object->jumlah_cicilan;
        $pengajuan->tenor = $object->tenor;
        $pengajuan->tanggal_ajuan = $object->tanggal_ajuan;
        return $pengajuan;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM pengajuan WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_pengajuan = $data->id_pengajuan;
        $this->anggota_id = $data->anggota_id;
        $this->stat_pengajuan_id = $data->stat_pengajuan_id;
        $this->jumlah_pinjam = $data->jumlah_pinjam;
        $this->jumlah_cicilan = $data->jumlah_cicilan;
        $this->tenor = $data->tenor;
        $this->tanggal_ajuan = $data->tanggal_ajuan;
        return $this;
    }
    public function get($where = "", $groupby = "", $orderby = "", $stringlimit = "")
    {
        if ($stringlimit != "") {
            $stringlimit = "limit " . $stringlimit;
        }
        //set untuk where
        if ($where != "") {
            $where = "where " . $where;
        }
        if ($groupby != "") {
            $groupby = "group by " . $groupby;
        }
        if ($orderby != "") {
            $orderby = "order by " . $orderby;
        }

        $data = $this->db->query("select * from pengajuan $where $groupby $orderby $stringlimit")->result();
        $result = [];
        if (count($data) != 0) {
            foreach ($data as $row) {
                array_push($result, $this->transform($row));
            }
        }
        return $result;
    }
    public function update($data)
    {
        $this->id_pengajuan = isset($data['id_pengajuan']) ? $data['id_pengajuan'] : $this->id_pengajuan;
        $this->anggota_id = isset($data['anggota_id']) ? $data['anggota_id'] : $this->anggota_id;
        $this->stat_pengajuan_id = isset($data['stat_pengajuan_id']) ? $data['stat_pengajuan_id'] : $this->stat_pengajuan_id;
        $this->jumlah_pinjam = isset($data['jumlah_pinjam']) ? $data['jumlah_pinjam'] : $this->jumlah_pinjam;
        $this->jumlah_cicilan = isset($data['jumlah_cicilan']) ? $data['jumlah_cicilan'] : $this->jumlah_cicilan;
        $this->tenor = isset($data['tenor']) ? $data['tenor'] : $this->tenor;
        $this->tanggal_ajuan = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_pengajuan == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_pengajuan = $id;
            return $id;
        } else {
            $this->db->where('id_pengajuan', $this->id_pengajuan);
            $this->db->update($this->table, $array);
            return $this->id_pengajuan;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('pengajuan', array('id_pengajuan' => $this->id_pengajuan));
        return true;
    }
    public function Anggota()
    {
        return $this->anggota->get_one("id_anggota = '" . $this->anggota_id . "'");
    }
    public function GetNamaAnggota()
    {
        return $this->Anggota()->nama_anggota;
    }
    public function StatusAju()
    {
        return $this->status_pengajuan->get_one("id_stat_pengajuan = '" . $this->stat_pengajuan_id . "'");
    }
    public function GetStatusAju()
    {
        return $this->StatusAju()->status_pengajuan;
    }
}
