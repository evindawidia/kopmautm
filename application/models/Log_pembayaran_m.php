<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log_pembayaran_m extends CI_Model
{
    private $table = "log_pembayaran";
    public $id_pembayaran = "";
    public $stat_bayar_id = "";
    public $pengajuan_id = "";
    public $date_created = "";

    public function transform($object)
    {
        $pembayaran = new Log_pembayaran_m();
        $pembayaran->id_pembayaran = $object->id_pembayaran;
        $pembayaran->stat_bayar_id = $object->stat_bayar_id;
        $pembayaran->pengajuan_id = $object->pengajuan_id;
        $pembayaran->date_created = $object->date_created;
        return $pembayaran;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM log_pembayaran WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_pembayaran = $data->id_pembayaran;
        $this->stat_bayar_id = $data->stat_bayar_id;
        $this->pengajuan_id = $data->pengajuan_id;
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

        $data = $this->db->query("select * from log_pembayaran $where $groupby $orderby $stringlimit")->result();
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
        $this->id_pembayaran = isset($data['id_pembayaran']) ? $data['id_pembayaran'] : $this->id_pembayaran;
        $this->stat_bayar_id = isset($data['stat_bayar_id']) ? $data['stat_bayar_id'] : $this->stat_bayar_id;
        $this->pengajuan_id = isset($data['pengajuan_id']) ? $data['pengajuan_id'] : $this->pengajuan_id;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_pembayaran == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_pembayaran = $id;
            return $id;
        } else {
            $this->db->where('id_pembayaran', $this->id_pembayaran);
            $this->db->update($this->table, $array);
            return $this->id_pembayaran;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('log_pembayaran', array('id_pembayaran' => $this->id_pembayaran));
        return true;
    }
}
