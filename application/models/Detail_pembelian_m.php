<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_pembelian_m extends CI_Model
{
    private $table = "detail_pembelian";
    public $id_det_pembelian = "";
    public $status_beli_id = "";
    public $pembelian_id = "";
    public $barang_id = "";
    public $jumlah_beli = "";
    public $stock = "";

    public function transform($object)
    {
        $detail_pembelian = new Detail_pembelian_m();
        $detail_pembelian->id_det_pembelian = $object->id_det_pembelian;
        $detail_pembelian->status_beli_id = $object->status_beli_id;
        $detail_pembelian->pembelian_id = $object->pembelian_id;
        $detail_pembelian->barang_id = $object->barang_id;
        $detail_pembelian->jumlah_beli = $object->jumlah_beli;
        $detail_pembelian->date_created = $object->date_created;
        return $detail_pembelian;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM detail_pembelian WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_det_pembelian = $data->id_det_pembelian;
        $this->status_beli_id = $data->status_beli_id;
        $this->pembelian_id = $data->pembelian_id;
        $this->barang_id = $data->barang_id;
        $this->jumlah_beli = $data->jumlah_beli;
        $this->date_created = $data->date_created;
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

        $data = $this->db->query("select * from detail_pembelian $where $groupby $orderby $stringlimit")->result();
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
        $this->id_det_pembelian = isset($data['id_det_pembelian']) ? $data['id_det_pembelian'] : $this->id_det_pembelian;
        $this->status_beli_id = isset($data['status_beli_id']) ? $data['status_beli_id'] : $this->status_beli_id;
        $this->pembelian_id = isset($data['pembelian_id']) ? $data['pembelian_id'] : $this->pembelian_id;
        $this->barang_id = isset($data['barang_id']) ? $data['barang_id'] : $this->barang_id;
        $this->jumlah_beli = isset($data['jumlah_beli']) ? $data['jumlah_beli'] : $this->jumlah_beli;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_det_pembelian == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_det_pembelian = $id;
            return $id;
        } else {
            $this->db->where('id_det_pembelian', $this->id_det_pembelian);
            $this->db->update($this->table, $array);
            return $this->id_det_pembelian;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('detail_pembelian', array('id_det_pembelian' => $this->id_det_pembelian));
        return true;
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
