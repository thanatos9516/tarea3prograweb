<?php
  // file: Publisher.php

class Publisher extends Model {

  static $publishers = [
    ['id'=>4056,'name'=>'John Wiley & Sons ','book'=>'Operating System Concepts',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'John Wiley & Sons ','book'=>'Database System Concepts',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'Pearson Education ','book'=>'Computer Networks',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'Pearson Education ','book'=>'Modern Operating Systems',
     'author'=>'Juan Perez','phone'=>'8944556'], 
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $pub)
      if ($pub['id'] == $id) return $pub;
    return [];
  }
}
?>