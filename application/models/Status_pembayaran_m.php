<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_pembayaran_m extends CI_Model
{
    private $table = "status_pembayaran";
    public $id_stat_bayar = "";
    public $status_bayar = "";
    public $date_created = "";

    public function transform($object)
    {
        $status_pembayaran = new Status_pembayaran_m();
        $status_pembayaran->id_stat_bayar = $object->id_stat_bayar;
        $status_pembayaran->status_bayar = $object->status_bayar;
        $status_pembayaran->date_created = $object->date_created;
        return $status_pembayaran;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM status_pembayaran WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_stat_bayar = $data->id_stat_bayar;
        $this->status_bayar = $data->status_bayar;
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

        $data = $this->db->query("select * from status_pembayaran $where $groupby $orderby $stringlimit")->result();
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
        $this->id_stat_bayar = isset($data['id_stat_bayar']) ? $data['id_stat_bayar'] : $this->id_stat_bayar;
        $this->status_bayar = isset($data['status_bayar']) ? $data['status_bayar'] : $this->status_bayar;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_stat_bayar == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_stat_bayar = $id;
            return $id;
        } else {
            $this->db->where('id_stat_bayar', $this->id_stat_bayar);
            $this->db->update($this->table, $array);
            return $this->id_stat_bayar;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('status_pembayaran', array('id_stat_bayar' => $this->id_stat_bayar));
        return true;
    }
}
