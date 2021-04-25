<?php
  // file: Author.php

class Author extends Model {

  static $author = [
    ['id'=>4056,'name'=>'Juan Perez ','book'=>'C# .Net Developer',
     'email'=>'juan.perez@univ.ac','publisher'=>'Editorial Costa Rica'], 
     ['id'=>4056,'name'=>'Juan Perez ','book'=>'C# .Net Developer',
     'email'=>'juan.perez@univ.ac','publisher'=>'Editorial Costa Rica'], 
     ['id'=>4056,'name'=>'Juan Perez ','book'=>'C# .Net Developer',
     'email'=>'juan.perez@univ.ac','publisher'=>'Editorial Costa Rica'], 
     ['id'=>4056,'name'=>'Juan Perez ','book'=>'C# .Net Developer',
     'email'=>'juan.perez@univ.ac','publisher'=>'Editorial Costa Rica'], 
     ['id'=>4056,'name'=>'Juan Perez ','book'=>'C# .Net Developer',
     'email'=>'juan.perez@univ.ac','publisher'=>'Editorial Costa Rica'], 
  ];

  public static function all() { 
    return static::$authors; 
  }

  public static function find($id) {
    foreach (static::$authors as $key => $auth)
      if ($auth['id'] == $id) return $auth;
    return [];
  }
}
?>