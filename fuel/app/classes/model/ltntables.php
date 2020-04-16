<?php
namespace Model;
use \DB;
class LTNTables extends \Model {
        public static function get_table($table_name)
        {
            if($table_name == 'hospitals'){
                return DB::query('SELECT providerID, providerName, state FROM hospitals', DB::SELECT)->execute()->as_array();
            }
            if($table_name == 'drg_description'){
                return DB::query('SELECT DRG_ID, DRG_Description FROM drg_description', DB::SELECT)->execute()->as_array();
            }
        }
        public static function get_DRG($DRG_ID)
        {
            return DB::query('SELECT DRG_ID, DRG_Description FROM drg_description WHERE DRG_ID=\''+$DRG_ID + '\'', DB::SELECT)->execute()->as_array();
        }
        public static function get_HospitalDetails($HospitalID)
        {
            $retarr = DB::query('SELECT * FROM hospitals WHERE providerID=\''+$HospitalID+'\'', DB::SELECT)->execute()->as_array();
            $DRG_DATA = DB::query('SELECT * FROM drg_cases WHERE providerID=\''+$HospitalID+'\'', DB::SELECT)->execute()->as_array();
        }
}
?>