<?php
  // file: Author.php

class Author extends Model {

  static $authors = [
    ['id'=>4056,'name'=>'Abraham Silberschatz ','book'=>'Operating System Concepts',
     'email'=>'juan.perez@univ.ac','publisher'=>'John Wiley & Sons'], 
     ['id'=>4056,'name'=>'Abraham Silberschatz ','book'=>'Database System Concepts',
     'email'=>'juan.perez@univ.ac','publisher'=>'John Wiley & Sons'], 
     ['id'=>4056,'name'=>' 	Andrew S. Tanenbaum ','book'=>'Computer Networks',
     'email'=>'juan.perez@univ.ac','publisher'=>'Pearson Education 	'], 
     ['id'=>4056,'name'=>' 	Andrew S. Tanenbaum ','book'=>'Modern Operating Systems',
     'email'=>'juan.perez@univ.ac','publisher'=>'Pearson Education 	'], 
  ];

  public static function all() { 
    return self::$authors; 
  }

  public static function find($id) {
    foreach (self::$authors as $key => $auth)
      if ($auth['id'] == $id) return $auth;
    return [];
  }
}
?>