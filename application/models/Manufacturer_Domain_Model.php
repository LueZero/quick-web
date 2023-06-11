<?php

class Manufacturer_Domain_Model extends CI_Model
{
    private $table = 'manufacturer_domains';

    public function __construct()
    {
        $this->load->database();
    }

    public function add($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id, $manufacturerId)
    {
          return $this->db->where(['id' => $id, 'manufacturer_id' => $manufacturerId])->delete($this->table);
    }

    public function update($id, $manufacturerId, $data)
    {
          return $this->db->where(['id' => $id, 'manufacturer_id' => $manufacturerId])->update($this->table, $data);
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
