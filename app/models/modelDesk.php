<?php
Class ModelDesk extends Model {

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

    public function newAdv($title,$text,$type,$cat,$creator,$tel,$date)
    {
        $sql = "INSERT INTO `adv` (`adv_id`,`adv_title`,`adv_text`,`adv_cat`,`adv_type`,`adv_creator`,`adv_date`,`adv_img`,`adv_telephone`) 
                            VALUES('NULL','".$title."','".$text."','".$cat."','".$type."','".$creator."','".$date."','NULL','".$tel."')";

        return $this->insert($sql);
    }
}