<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_beli_m extends CI_Model
{
    private $table = "status_beli";
    public $id_status_beli = "";
    public $status_beli = "";
    public $date_created = "";

    public function transform($object)
    {
        $status_beli = new Status_beli_m();
        $status_beli->id_status_beli = $object->id_status_beli;
        $status_beli->status_beli = $object->status_beli;
        $status_beli->date_created = $object->date_created;
        return $status_beli;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM status_beli WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_status_beli = $data->id_status_beli;
        $this->status_beli = $data->status_beli;
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

        $data = $this->db->query("select * from status_beli $where $groupby $orderby $stringlimit")->result();
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
        $this->id_status_beli = isset($data['id_status_beli']) ? $data['id_status_beli'] : $this->id_status_beli;
        $this->status_beli = isset($data['status_beli']) ? $data['status_beli'] : $this->status_beli;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_status_beli == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_status_beli = $id;
            return $id;
        } else {
            $this->db->where('id_status_beli', $this->id_status_beli);
            $this->db->update($this->table, $array);
            return $this->id_status_beli;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('status_beli', array('id_status_beli' => $this->id_status_beli));
        return true;
    }
}
