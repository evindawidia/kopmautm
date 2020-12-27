<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas_m extends CI_Model
{
    private $table = "fakultas";
    public $id_fakultas = "";
    public $nama_fakultas = "";
    public $date_created = "";

    public function transform($object)
    {
        $fakultas = new Fakultas_m();
        $fakultas->id_fakultas = $object->id_fakultas;
        $fakultas->nama_fakultas = $object->nama_fakultas;
        $fakultas->date_created = $object->date_created;
        return $fakultas;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM fakultas WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_fakultas = $data->id_fakultas;
        $this->nama_fakultas = $data->nama_fakultas;
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

        $data = $this->db->query("select * from fakultas $where $groupby $orderby $stringlimit")->result();
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
        $this->id_fakultas = isset($data['id_fakultas']) ? $data['id_fakultas'] : $this->id_fakultas;
        $this->nama_fakultas = isset($data['nama_fakultas']) ? $data['nama_fakultas'] : $this->nama_fakultas;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_fakultas == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_fakultas = $id;
            return $id;
        } else {
            $this->db->where('id_fakultas', $this->id_fakultas);
            $this->db->update($this->table, $array);
            return $this->id_fakultas;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('fakultas', array('id_fakultas' => $this->id_fakultas));
        return true;
    }
}
