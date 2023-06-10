<?php

class News_Model extends CI_Model
{
    private $table = 'news';

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

    public function getWhere($field = [], $limit = null, $offset = null)
    {
        return $this->db->get_where($this->table, $field);
    }
}
