<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_m extends CI_Model
{
    private $table = "kategori";
    public $id_kategori = "";
    public $nama_kategori = "";
    public $date_created = "";

    public function transform($object)
    {
        $kategori = new Kategori_m();
        $kategori->id_kategori = $object->id_kategori;
        $kategori->nama_kategori = $object->nama_kategori;
        $kategori->date_created = $object->date_created;
        return $kategori;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM kategori WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_kategori = $data->id_kategori;
        $this->nama_kategori = $data->nama_kategori;
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

        $data = $this->db->query("select * from kategori $where $groupby $orderby $stringlimit")->result();
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
        $this->id_kategori = isset($data['id_kategori']) ? $data['id_kategori'] : $this->id_kategori;
        $this->nama_kategori = isset($data['nama_kategori']) ? $data['nama_kategori'] : $this->nama_kategori;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_kategori == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_kategori = $id;
            return $id;
        } else {
            $this->db->where('id_kategori', $this->id_kategori);
            $this->db->update($this->table, $array);
            return $this->id_kategori;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('kategori', array('id_kategori' => $this->id_kategori));
        return true;
    }
}
