<?php
namespace Model;
use \DB;
class DBtoTable extends \Model {
        public static function get_table($table_name)
        {
            if($table_name == 'hospitals'){
                return DB::query('SELECT ')
            }
        }
}
?>