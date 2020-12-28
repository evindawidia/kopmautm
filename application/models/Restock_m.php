<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restock_m extends CI_Model
{
    private $table = "restock";
    public $id_restock = "";
    public $barang_id = "";
    public $jumlah_beli_stock = "";
    public $tanggal_beli_stock = "";

    public function transform($object)
    {
        $restock = new Restock_m();
        $restock->id_restock = $object->id_restock;
        $restock->barang_id = $object->barang_id;
        $restock->jumlah_beli_stock = $object->jumlah_beli_stock;
        $restock->tanggal_beli_stock = $object->tanggal_beli_stock;
        return $restock;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM restock WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_restock = $data->id_restock;
        $this->barang_id = $data->barang_id;
        $this->jumlah_beli_stock = $data->jumlah_beli_stock;
        $this->tanggal_beli_stock = $data->tanggal_beli_stock;
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

        $data = $this->db->query("select * from restock $where $groupby $orderby $stringlimit")->result();
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
        $this->id_restock = isset($data['id_restock']) ? $data['id_restock'] : $this->id_restock;
        $this->barang_id = isset($data['barang_id']) ? $data['barang_id'] : $this->barang_id;
        $this->jumlah_beli_stock = isset($data['jumlah_beli_stock']) ? $data['jumlah_beli_stock'] : $this->jumlah_beli_stock;
        $this->tanggal_beli_stock = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_restock == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_restock = $id;
            return $id;
        } else {
            $this->db->where('id_restock', $this->id_restock);
            $this->db->update($this->table, $array);
            return $this->id_restock;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('restock', array('id_restock' => $this->id_restock));
        return true;
    }
}
