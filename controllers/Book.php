<?php
  // file: Book.php

class Book extends Model {

  static $book = [
    ['id'=>4056,'name'=>'C# .Net Developer ','author'=>'José Molina',
     'publisher'=>'Editorial Costa RIca.'], 
     ['id'=>4056,'name'=>'C# .Net Developer ','author'=>'José Molina',
     'publisher'=>'Editorial Costa RIca.'],
     ['id'=>4056,'name'=>'C# .Net Developer ','author'=>'José Molina',
     'publisher'=>'Editorial Costa RIca.'],
     ['id'=>4056,'name'=>'C# .Net Developer ','author'=>'José Molina',
     'publisher'=>'Editorial Costa RIca.'],
     ['id'=>4056,'name'=>'C# .Net Developer ','author'=>'José Molina',
     'publisher'=>'Editorial Costa RIca.'],
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