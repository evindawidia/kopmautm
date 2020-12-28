<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_m extends CI_Model
{
    private $table = "supplier";
    public $id_supplier = "";
    public $nama_supplier = "";
    public $alamat_supplier = "";
    public $no_telpon_supplier = "";
    public $date_created = "";

    public function transform($object)
    {
        $supplier = new Supplier_m();
        $supplier->id_supplier = $object->id_supplier;
        $supplier->nama_supplier = $object->nama_supplier;
        $supplier->alamat_supplier = $object->alamat_supplier;
        $supplier->no_telpon_supplier = $object->no_telpon_supplier;
        $supplier->date_created = $object->date_created;
        return $supplier;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM supplier WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_supplier = $data->id_supplier;
        $this->nama_supplier = $data->nama_supplier;
        $this->alamat_supplier = $data->alamat_supplier;
        $this->no_telpon_supplier = $data->no_telpon_supplier;
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

        $data = $this->db->query("select * from supplier $where $groupby $orderby $stringlimit")->result();
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
        $this->id_supplier = isset($data['id_supplier']) ? $data['id_supplier'] : $this->id_supplier;
        $this->nama_supplier = isset($data['nama_supplier']) ? $data['nama_supplier'] : $this->nama_supplier;
        $this->alamat_supplier = isset($data['alamat_supplier']) ? $data['alamat_supplier'] : $this->alamat_supplier;
        $this->no_telpon_supplier = isset($data['no_telpon_supplier']) ? $data['no_telpon_supplier'] : $this->no_telpon_supplier;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_supplier == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_supplier = $id;
            return $id;
        } else {
            $this->db->where('id_supplier', $this->id_supplier);
            $this->db->update($this->table, $array);
            return $this->id_supplier;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('supplier', array('id_supplier' => $this->id_supplier));
        return true;
    }
}
