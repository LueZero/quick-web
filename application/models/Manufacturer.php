<?php

class Manufacturer extends CI_Model
{
    private $table = 'manufacturers';

    public function __construct()
    {
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->where("id", $id)->delete($this->table);
    }

    public function update($id, $data)
    {
        return $this->db->where("id", $id)->update($data);
    }

    public function getAll()
    {
        return $this->db->get($this->table);
    }

    public function getWhere($field = [], $limit = null, $offset = null)
    {
        return $this->db->get_where($this->table, $field);
    }
}
