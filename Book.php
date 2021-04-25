<?php
  // file: Book.php

class Book extends Model {

  static $books = [
    ['id'=>4056,'name'=>'Operating System Concepts ','author'=>'Abraham Silberschatz',
     'publisher'=>'John Wiley & Sons'], 
     ['id'=>4056,'name'=>'Database System Concepts','author'=>'Abraham Silberschatz',
     'publisher'=>'John Wiley & Sons'],
     ['id'=>4056,'name'=>'Computer Networks ','author'=>'Andrew S. Tanenbaum',
     'publisher'=>'Pearson Education'],
     ['id'=>4056,'name'=>'Modern Operating Systems 	 ','author'=>'Andrew S. Tanenbaum',
     'publisher'=>'Pearson Education'],
  ];

  public static function all() { 
    return self::$books; 
  }

  public static function find($id) {
    foreach (self::$books as $key => $bok)
      if ($bok['id'] == $id) return $bok;
    return [];
  }
}
?>