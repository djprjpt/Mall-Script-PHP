<?php

/*
 * Dhaval Prajapati
 * Projectname: Club-<PostfixProj>
 * Responsibility: <High level defination>
 * 
 */

class Mall {

    function __construct() {
        $this->db = new Database(Config_Database::DB_TYPE, Config_Database::DB_HOST, Config_Database::DB_NAME, Config_Database::DB_USER, Config_Database::DB_PASS);
        $this->fetchListFromWiki();
    }

    function fetchListFromWiki() {
        $html = file_get_html(Constants_URL::Mall_List);
        $table = $html->find("table", 0);
        foreach ($table->find('tr') as $tr) {
            $name = trim($tr->find('td', 0)->plaintext);
            if ($name != '') {
                $rec = $this->db->select('SELECT id FROM ' . Constants_DB::Tbl_Mall_Master . ' WHERE mall_name = :name', array('name' => strtolower($name)));
                if (count($rec) == 0) {
                    $this->db->insert(Constants_DB::Tbl_Mall_Master, array('mall_name' => strtolower($name), 'city_id' => 1));
                    echo $name . ' Inserted to Table: ' . Constants_DB::Tbl_Mall_Master . '<br />';
                }
            }
        }
    }

}
