<?php
namespace Model;
use \DB;
class LTNtables extends \Model {
        public static function get_table($table_name)
        {
            if($table_name == 'hospitals'){
                return DB::query('SELECT providerID, providerName, state as text FROM hospitals', DB::SELECT)->execute()->as_array();
            }
            if($table_name == 'drg_description'){
                return DB::query('SELECT DRG_ID, DRG_Description as text FROM drg_description', DB::SELECT)->execute()->as_array();
            }
        }
}
?>