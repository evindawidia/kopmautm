<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_m extends CI_Model
{
    private $table = "prodi";
    public $id_prodi = "";
    public $fakultas_id = "";
    public $nama_prodi = "";
    public $date_created = "";

    public function transform($object)
    {
        $prodi = new Prodi_m();
        $prodi->id_prodi = $object->id_prodi;
        $prodi->fakultas_id = $object->fakultas_id;
        $prodi->nama_prodi = $object->nama_prodi;
        $prodi->date_created = $object->date_created;
        return $prodi;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM prodi WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_prodi = $data->id_prodi;
        $this->fakultas_id = $data->fakultas_id;
        $this->nama_prodi = $data->nama_prodi;
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

        $data = $this->db->query("select * from prodi $where $groupby $orderby $stringlimit")->result();
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
        $this->id_prodi = isset($data['id_prodi']) ? $data['id_prodi'] : $this->id_prodi;
        $this->fakultas_id = isset($data['fakultas_id']) ? $data['fakultas_id'] : $this->fakultas_id;
        $this->nama_prodi = isset($data['nama_prodi']) ? $data['nama_prodi'] : $this->nama_prodi;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_prodi == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_prodi = $id;
            return $id;
        } else {
            $this->db->where('id_prodi', $this->id_prodi);
            $this->db->update($this->table, $array);
            return $this->id_prodi;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('prodi', array('id_prodi' => $this->id_prodi));
        return true;
    }
}
