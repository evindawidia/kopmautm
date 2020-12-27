<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gender_m extends CI_Model
{
    private $table = "gender";
    public $id_gender = "";
    public $jenis_kelamin = "";
    public $date_created = "";

    public function transform($object)
    {
        $gender = new Gender_m();
        $gender->id_gender = $object->id_gender;
        $gender->jenis_kelamin = $object->jenis_kelamin;
        $gender->date_created = $object->date_created;
        return $gender;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM gender WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_gender = $data->id_gender;
        $this->jenis_kelamin = $data->jenis_kelamin;
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

        $data = $this->db->query("select * from gender $where $groupby $orderby $stringlimit")->result();
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
        $this->id_gender = isset($data['id_gender']) ? $data['id_gender'] : $this->id_gender;
        $this->jenis_kelamin = isset($data['jenis_kelamin']) ? $data['jenis_kelamin'] : $this->jenis_kelamin;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_gender == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_gender = $id;
            return $id;
        } else {
            $this->db->where('id_gender', $this->id_gender);
            $this->db->update($this->table, $array);
            return $this->id_gender;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('gender', array('id_gender' => $this->id_gender));
        return true;
    }
}
