<?php

/*
 * Dhaval Prajapati
 * Projectname: Club-<PostfixProj>
 * Responsibility: <High level defination>
 * 
 */

class Category {

    function __construct($id) {
        $this->db = new Database(Config_Database::DB_TYPE, Config_Database::DB_HOST, Config_Database::DB_NAME, Config_Database::DB_USER, Config_Database::DB_PASS);
        $rec = $this->db->select('SELECT id, mall_name FROM ' . Constants_DB::Tbl_Mall_Master . ' WHERE id = :id', array('id' => $id));
        if (count($rec) == 0) {
            echo 'Error';
        } else if (count($rec) == 1) {
            $this->{str_replace(' ', '_', $rec[0]['mall_name'])}();
        }
    }

    function dubai_mall() {
        echo 'hi';
    }

}
