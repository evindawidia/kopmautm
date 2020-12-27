<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_m extends CI_Model
{
    private $table = "admin";
    public $id_barang = "";
    public $supplier_id = "";
    public $kategori_id = "";
    public $nama_barang = "";
    public $harga_jual = "";
    public $harga_beli = "";
    public $image = "";
    public $deskripsi = "";
    public $date_created = "";
    public $stock = "";

    public function transform($object)
    {
        $barang = new Barang_m();
        $barang->id_barang = $object->id_barang;
        $barang->supplier_id = $object->supplier_id;
        $barang->kategori_id = $object->kategori_id;
        $barang->nama_barang = $object->nama_barang;
        $barang->harga_jual = $object->harga_jual;
        $barang->harga_beli = $object->harga_beli;
        $barang->image = $object->image;
        $barang->deskripsi = $object->deskripsi;
        $barang->date_created = $object->date_created;
        $barang->stock = $object->stock;
        return $barang;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM barang WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_barang = $data->id_barang;
        $this->supplier_id = $data->supplier_id;
        $this->kategori_id = $data->kategori_id;
        $this->nama_barang = $data->nama_barang;
        $this->harga_jual = $data->harga_jual;
        $this->harga_beli = $data->harga_beli;
        $this->image = $data->image;
        $this->deskripsi = $data->deskripsi;
        $this->date_created = $data->date_created;
        $this->stock = $data->stock;
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

        $data = $this->db->query("select * from barang $where $groupby $orderby $stringlimit")->result();
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
        $this->id_barang = isset($data['id_barang']) ? $data['id_barang'] : $this->id_barang;
        $this->supplier_id = isset($data['supplier_id']) ? $data['supplier_id'] : $this->supplier_id;
        $this->kategori_id = isset($data['kategori_id']) ? $data['kategori_id'] : $this->kategori_id;
        $this->nama_barang = isset($data['nama_barang']) ? $data['nama_barang'] : $this->nama_barang;
        $this->harga_jual = isset($data['harga_jual']) ? $data['harga_jual'] : $this->harga_jual;
        $this->harga_beli = isset($data['harga_beli']) ? $data['harga_beli'] : $this->harga_beli;
        $this->image = isset($data['image']) ? $data['image'] : $this->image;
        $this->deskripsi = isset($data['deskripsi']) ? $data['deskripsi'] : $this->deskripsi;
        $this->stock = isset($data['stock']) ? $data['stock'] : $this->stock;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_barang == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_barang = $id;
            return $id;
        } else {
            $this->db->where('id_barang', $this->id_barang);
            $this->db->update($this->table, $array);
            return $this->id_barang;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('barang', array('id_barang' => $this->id_barang));
        return true;
    }
}
