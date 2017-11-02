<?php
Class ModelIndex extends Model {

    public function getAllAdv()
    {
        $data = "SELECT * FROM `adv`";
        $data = $this->select($data);
        return $data;
    }

    public function getAdvByID($id) {
        $data = "SELECT * FROM `adv` WHERE $id = `adv_id`";
        $data = $this->select($data);
        return $data;
    }
}