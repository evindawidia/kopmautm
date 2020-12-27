<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_m extends CI_Model
{
    private $table = "admin";
    public $id_anggota = "";
    public $level_id = "";
    public $gender_id = "";
    public $prodi_id = "";
    public $nama_anggota = "";
    public $alamat_anggota = "";
    public $email = "";
    public $no_telpon_anggota = "";
    public $date_created = "";
    public $password = "";

    public function transform($object)
    {
        $anggota = new Anggota_m();
        $anggota->id_anggota = $object->id_anggota;
        $anggota->level_id = $object->level_id;
        $anggota->gender_id = $object->gender_id;
        $anggota->prodi_id = $object->prodi_id;
        $anggota->nama_anggota = $object->nama_anggota;
        $anggota->alamat_anggota = $object->alamat_anggota;
        $anggota->email = $object->email;
        $anggota->no_telpon_anggota = $object->no_telpon_anggota;
        $anggota->date_created = $object->date_created;
        $anggota->password = $object->password;
        return $anggota;
    }
    public function get_one($where)
    {
        $data = $this->db->query("SELECT * FROM anggota WHERE " . $where . " limit 1")->result();
        if (count($data) != 0) {
            $data = $data[0];
        } else {
            return null;
        }
        $this->id_anggota = $data->id_anggota;
        $this->level_id = $data->level_id;
        $this->gender_id = $data->gender_id;
        $this->prodi_id = $data->prodi_id;
        $this->nama_anggota = $data->nama_anggota;
        $this->alamat_anggota = $data->alamat_anggota;
        $this->email = $data->email;
        $this->no_telpon_anggota = $data->no_telpon_anggota;
        $this->date_created = $data->date_created;
        $this->password = $data->password;
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

        $data = $this->db->query("select * from anggota $where $groupby $orderby $stringlimit")->result();
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
        $this->id_anggota = isset($data['id_anggota']) ? $data['id_anggota'] : $this->id_anggota;
        $this->level_id = isset($data['level_id']) ? $data['level_id'] : $this->level_id;
        $this->gender_id = isset($data['gender_id']) ? $data['gender_id'] : $this->gender_id;
        $this->prodi_id = isset($data['prodi_id']) ? $data['prodi_id'] : $this->prodi_id;
        $this->nama_anggota = isset($data['nama_anggota']) ? $data['nama_anggota'] : $this->nama_anggota;
        $this->alamat_anggota = isset($data['alamat_anggota']) ? $data['alamat_anggota'] : $this->alamat_anggota;
        $this->email = isset($data['email']) ? $data['email'] : $this->email;
        $this->no_telpon_anggota = isset($data['no_telpon_anggota']) ? $data['no_telpon_anggota'] : $this->no_telpon_anggota;
        $this->password = isset($data['password']) ? $data['password'] : $this->password;
        $this->date_created = date("Y-m-d");
    }
    public function write()
    {
        $array = json_decode(json_encode($this), true);
        if ($this->id_anggota == "") {
            $this->db->insert($this->table, $array);
            $id = $this->db->insert_id();
            $this->id_anggota = $id;
            return $id;
        } else {
            $this->db->where('id_anggota', $this->id_anggota);
            $this->db->update($this->table, $array);
            return $this->id_anggota;
        }
        return $id;
    }

    public function delete()
    {
        $this->db->delete('anggota', array('id_anggota' => $this->id_anggota));
        return true;
    }
}
