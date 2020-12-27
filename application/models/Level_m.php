<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level_m extends CI_Model
{
    private $table = "level";
    public $id_level = "";
    public $ket_level = "";
    public $date_created = "";

    public function transform($object)
    {
        $level = new Level_m();
        $level->id_level = $object->id_level;
        $level->ket_level = $object->ket_level;
        $level->date_created = $object->date_created;
        return $level;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM level WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_level = $data->id_level;
        $this->ket_level = $data->ket_level;
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

        $data = $this->db->query("select * from level $where $groupby $orderby $stringlimit")->result();
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
        $this->id_level = isset($data['id_level']) ? $data['id_level'] : $this->id_level;
        $this->ket_level = isset($data['ket_level']) ? $data['ket_level'] : $this->ket_level;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_level == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_level = $id;
            return $id;
        } else {
            $this->db->where('id_level', $this->id_level);
            $this->db->update($this->table, $array);
            return $this->id_level;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('level', array('id_level' => $this->id_level));
        return true;
    }
}
