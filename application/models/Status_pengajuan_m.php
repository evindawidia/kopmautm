<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_pengajuan_m extends CI_Model
{
    private $table = "status_pengajuan";
    public $id_stat_pengajuan = "";
    public $status_pengajuan = "";
    public $date_created = "";

    public function transform($object)
    {
        $status_pengajuan = new Status_pengajuan_m();
        $status_pengajuan->id_stat_pengajuan = $object->id_stat_pengajuan;
        $status_pengajuan->status_pengajuan = $object->status_pengajuan;
        $status_pengajuan->date_created = $object->date_created;
        return $status_pengajuan;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM status_pengajuan WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_stat_pengajuan = $data->id_stat_pengajuan;
        $this->status_pengajuan = $data->status_pengajuan;
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

        $data = $this->db->query("select * from status_pengajuan $where $groupby $orderby $stringlimit")->result();
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
        $this->id_stat_pengajuan = isset($data['id_stat_pengajuan']) ? $data['id_stat_pengajuan'] : $this->id_stat_pengajuan;
        $this->status_pengajuan = isset($data['status_pengajuan']) ? $data['status_pengajuan'] : $this->status_pengajuan;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_stat_pengajuan == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_stat_pengajuan = $id;
            return $id;
        } else {
            $this->db->where('id_stat_pengajuan', $this->id_stat_pengajuan);
            $this->db->update($this->table, $array);
            return $this->id_stat_pengajuan;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('status_pengajuan', array('id_stat_pengajuan' => $this->id_stat_pengajuan));
        return true;
    }
}
