<?php namespace Raymondoor\Model;

class DBoperation{
    public static function allFrom(string $table){
        try{
            $statement = 'SELECT * FROM '.$table.' ORDER BY id ASC';
            $query = new DBstatement($statement);
            return $query->execute([]);
        }catch(\Exception $e){
            return array('No such table');
        }
    }
    public static function makeTableIfNot(string $table, string $schema){
        if(empty($table) || empty($schema)){
            throw new \Exception('Table name and schema cannot be empty.');
        }
        $query = new DBstatement("CREATE TABLE IF NOT EXISTS {$table} ({$schema})");
        return $query->execute([]);
    }
    public static function dropTableIfIs(string $table){
        try{
            $statement = 'DROP TABLE IF EXISTS '.$table;
            $query = new DBstatement($statement);
            return $query->execute([]);
        }catch(\Exception $e){
            return array('No such table');
        }
    }
}