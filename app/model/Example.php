<?php namespace Raymondoor\Model;
class Example extends DBoperation{
    public static function all(){
        return parent::allFrom('example');
    }
    public static function seed(int $loop){
        for($i=0; $i<$loop; $i++){
            $query = new DBstatement('INSERT INTO example (name) VALUES (:name)');
            $query->execute(['name'=>'Some name'.$i]);
        }
        return ;
    }
    public static function drop(){
        parent::dropTableIfIs('example');
    }
    public static function make(){
        parent::makeTableIfNot('example', 
            'id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT'
        );
    }
}