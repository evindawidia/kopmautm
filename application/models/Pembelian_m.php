<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian_m extends CI_Model
{
    private $table = "pembelian";
    public $id_pembelian = "";
    public $anggota_id = "";
    public $status_beli_id = "";
    public $tanggal_beli = "";

    public function transform($object)
    {
        $pembelian = new Pembelian_m();
        $pembelian->id_pembelian = $object->id_pembelian;
        $pembelian->anggota_id = $object->anggota_id;
        $pembelian->status_beli_id = $object->status_beli_id;
        $pembelian->tanggal_beli = $object->tanggal_beli;
        return $pembelian;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM pembelian WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_pembelian = $data->id_pembelian;
        $this->anggota_id = $data->anggota_id;
        $this->status_beli_id = $data->status_beli_id;
        $this->tanggal_beli = $data->tanggal_beli;
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

        $data = $this->db->query("select * from pembelian $where $groupby $orderby $stringlimit")->result();
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
        $this->id_pembelian = isset($data['id_pembelian']) ? $data['id_pembelian'] : $this->id_pembelian;
        $this->anggota_id = isset($data['anggota_id']) ? $data['anggota_id'] : $this->anggota_id;
        $this->status_beli_id = isset($data['status_beli_id']) ? $data['status_beli_id'] : $this->status_beli_id;
        $this->tanggal_beli = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_pembelian == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_pembelian = $id;
            return $id;
        } else {
            $this->db->where('id_pembelian', $this->id_pembelian);
            $this->db->update($this->table, $array);
            return $this->id_pembelian;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('pembelian', array('id_pembelian' => $this->id_pembelian));
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
    public function DetailPembelian()
    {
        return $this->detail_pembelian->get("pembelian_id = '" . $this->id_pembelian . "'");
    }
    public function GetJumlahBeli()
    {
        $jumlahbeli = 0;
        foreach ($this->DetailPembelian() as $dp) {
            $jumlahbeli += $dp->jumlah_beli;
        }
        return $jumlahbeli;
    }
    public function GetTanggalBayar()
    {
        return $this->DetailPembelian()->date_created;
    }
    public function StatusBeli()
    {
        return $this->status_beli->get_one("id_status_beli = '" . $this->status_beli_id . "'");
    }
    public function GetStatusBeli()
    {
        return $this->StatusBeli()->status_beli;
    }
}
